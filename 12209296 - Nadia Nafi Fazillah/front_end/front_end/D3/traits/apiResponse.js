const responseNotFound = (ress) => {
    restart.status(404).json({
        succes: false,
        massage: 'not found'
    })
}

const responseSuccess = (res, result, massage ) => {
    return res.status(200).json({
    success: true,
    massage: massage,
    data: result
   })
}

module.exports = {
    responseNotFound,
    responseSuccess
}
