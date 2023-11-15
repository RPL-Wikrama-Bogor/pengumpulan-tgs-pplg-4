const responseNotFound = () => {
    return res.status(404).json ({
        success: false,
        message: 'Not Found'
    })
}

const responseSuccess = (res, result, message) => {
    res.status(200).json({
        success: false,
        message: 'Not Found',
        data: result
    })
}

module.exports = {
    responseNotFound,
    responseSuccess
}