const mysql = require('mysql2')
const dbConfig = require('../config/database');
const pool = mysql.createPool(dbConfig);

const {
    responseNotFound,
    responseSuccess
} = require('../traits/ApiResponse');
const { connect } = require('../routes/author');

const getAuthors = (req, res) => {
    const query = "SELECT * FROM authors";

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, (err, result) => {
            if(err) throw err

            responseSuccess(res, result, 'Authors succesfully fetched')
        })

      connection.release();
    })
}

const getAuthorById = (req, res) => {
    const id = req.params.id;
    const query = `SELECT * FROM authors WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, (err, result) => {
            if (err) throw err;

            if (result.length == 0) {
                responseNotFound(res)
                return
            }

            responseSuccess(res, result, 'Book successfully fetched')
        })

        connection.release();
    })

}

const createAuthor = (req, res) => {
    const data = req.body

    const query = 'INSERT INTO authors (nama, email, alamat, umur, media_sosial) VALUES (?, ?, ?, ?, ?)';
    const values = [data.nama, data.email, data.alamat, data.umur, data.media_sosial]

    pool.getConnection((err, connection) => {
        if (err) throw err;

        connection.query(query, values, (err, result) => {
            if (err) throw err;

                responseSuccess(res, result, 'Author successfully created');
        

            connection.release();
        });
    });
    
}

const updateAuthor = (req, res) => {
    const id = req.params.id;
    const data = req.body;

    const query = `UPDATE authors SET nama = ?, email = ?, alamat = ?, umur = ?, media_sosial = ? WHERE id = ${id}`
    const values = [data.nama, data.email, data.alamat, data.umur, data.media_sosial]

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, values, (err, result) => {
            if(err) throw err

            responseSuccess(res, result, 'Author successfully updated')

            connection.release()
        })
    })
}

const deleteAuthor = (req, res) => {
    const id = req.params.id;
    const query = `DELETE FROM authors WHERE id = ${id}`;

    pool.getConnection((err, connection) => {
        if(err) throw err

        connection.query(query, id, (err, result) => {
            if (err) throw err

            responseSuccess(res, result, 'Author successfully deleted');

            connection.release
        })
    })
}

module.exports = {
    getAuthors,
    getAuthorById,
    createAuthor,
    updateAuthor,
    deleteAuthor
}
