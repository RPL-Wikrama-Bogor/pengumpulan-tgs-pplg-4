const testFunction = () => {
    console.log('Saya berasal dari function node.js')
};

const newFunction = (message) => {
    console.log(message)
}

module.exports = {
    testFunction,
    newFunction
}
