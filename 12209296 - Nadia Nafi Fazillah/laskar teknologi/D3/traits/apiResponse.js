const responseNotFound = (res) => {
    res.status(404).json ({
        success: false,
        message: 'Not Found'
    })
}

const responseSuccess = (res, result, message) => {
    res.status(200).json({
        success: true,
        message: message,
        data: result
    })
}

const responseFailValidate = (res,massage)=>{
    return res.status(400).json({
        succes: false,
        massage: massage
    })
}

const responseAuthValidate = (res,token, massage,user )=>{
    return res.status(200).json({
        succes: true,
        token: token,
        massage: massage,
        user: user
    })
}

module.exports = {
    responseNotFound,
    responseSuccess,
    responseFailValidate,
    responseAuthValidate
}