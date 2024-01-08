const express = require('express')
const router = express.Router()
const {
    getAuthors,
    getAuthor,  
    addAuthor,
    updateAuthor,
    deleteAuthor,
    search,
    sortBy
} = require('../controllers/AuthorController')

//contoh akses http://localhost:3000/search?keyword=mau cari apa
router.get('/search', search)

//contoh akses http://localhost:3000/search?order=DESC / ASC
router.get('/sort', sortBy)

//route untuk menampilkan data
router.get('/', getAuthors)

//route untuk mengirim data
router.post('/',addAuthor )

//route untuk menampilkan data berdasarkan id buku
router.get('/:id', getAuthor)

//route untuk memperbaharui/update data
router.put('/:id', updateAuthor)

//route untuk menghapus data
router.delete('/:id', deleteAuthor)

module.exports = router