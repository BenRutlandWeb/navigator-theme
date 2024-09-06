const dispatch = (el, event, detail) => {
    el.dispatchEvent(new CustomEvent(event, { detail }));
};

export { dispatch };