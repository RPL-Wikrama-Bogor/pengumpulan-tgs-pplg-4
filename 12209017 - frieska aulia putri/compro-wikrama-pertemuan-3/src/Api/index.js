async function Get(url) {
    return await (url).then((res) => res.json);
}
 const nama='Wikrama';
export {Get};