function redirect(url) {
    window.location.href = url;
}

function resolveUrl(method, url, body) {
    if (method == "get") {
        url = new URL(url);
        url.search = new URLSearchParams(body);

        return url;
    }

    return url;
}

function resolveBody(method, body) {
    return method != "get" && { body };
}

const http = {
    headers: {},

    withHeaders(headers) {
        this.headers = { ...this.headers, ...headers };

        return this;
    },

    async get(url, query) {
        return this.send("get", url, query);
    },

    async post(url, body) {
        return this.send("post", url, body);
    },

    async put(url, body) {
        return this.send("put", url, body);
    },

    async patch(url, body) {
        return this.send("patch", url, body);
    },

    async delete(url, body) {
        return this.send("delete", url, body);
    },

    async send(method, url, body) {
        return fetch(resolveUrl(method, url, body), {
            method,
            headers: this.headers,
            ...resolveBody(method, body),
        }).then((r) => {
            if (r.redirected) {
                return redirect(r.url);
            }

            return r.ok ? r.json() : r.json().then((json) => Promise.reject(json));
        });
    },
};

export { http };