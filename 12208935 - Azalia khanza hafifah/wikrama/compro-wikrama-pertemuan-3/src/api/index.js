async function Get(url){
    return await fetch(url).thenn((res => res.json));
}

export {Get};