import { dispatch } from "@/utilities/dispatch";
import { http } from "@/utilities/http";

function getFormData(form) {
    return {
        url: form.action,
        method: form._method?.value ?? form.method,
        body: new FormData(form),
    };
}

function getRefs(el) {
    const ret = {};

    el.querySelectorAll('[x-ref]').forEach(e => {
        ret[e.getAttribute('x-ref')] = e;
    });

    return ret;
}

window.customElements.define("ajax-form", class extends HTMLElement {
    connectedCallback() {

        this.form = this.querySelector("form");

        this.form.addEventListener("submit", this.submit.bind(this));

        this.$refs = getRefs(this);
    }

    event(attribute, data) {
        if (this.hasAttribute("on" + attribute)) {
            this.addEventListener(attribute, function (event) {
                eval(this.getAttribute("on" + attribute));
            });
        }
        dispatch(this, attribute, data);
    }

    submit(event) {
        event.preventDefault();

        const { url, method, body } = getFormData(this.form);

        this.event("start");

        http.withHeaders({ "X-WP-Nonce": this.form._token?.value })
            .send(method, url, body)
            .then((response) => {
                this.event("success", response);
            })
            .catch((error) => {
                this.event("error", error);
            })
            .finally(() => {
                this.event("end");
            });
    }

});