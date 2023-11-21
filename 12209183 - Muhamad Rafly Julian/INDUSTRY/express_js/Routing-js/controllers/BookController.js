const mysql = require('mysql2')
const dbConfig = require('../config/database')
const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse')
const pool = mysql.createPool(dbConfig)
const getBooks = (req, res) => {
    const query = "SELECT * FROM `db_express_wikrama'.'books`"

    pool.getConnection((err, connection) => {
        if(err) throw err 

        connection.query(query, (err, result) => {
            if(err) throw err

            responseSuccess(res, result, 'Books successfully fetched')
        })

        connection.release()
    })
}

const getBook = (req, res) => {
    const id = req.params.id

    const query = `SELECT * FROM books WHERE id=${id}`

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, result) => {
            if(err) throw err

            if(result.length == 0){
                responseNotFound(res)
                return
            }

            responseSuccess(res, result, 'Book successfully fetched')
        })

        connection.release()
    })
}

module.exports = {
    getBooks,
    getBook
}