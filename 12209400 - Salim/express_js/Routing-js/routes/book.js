const express = require('express')
const router = express.Router()
const {
    getBooks,
    getBook
} = require('../controllers/BookController')

router.get('/', getBooks)

router.post('/',)

router.get('/:id', getBook)


router.post('/', (req, res) => {
    res.write('POST book code')
    res.end()
})

router.get('/:id', (req, res) => {

})

//untuk memperbarui/update data
router.put('/:id', (req, res) => {
    res.write('PUT book code')
    res.end()
})

//untuk menghapus data
router.delete('/:id', (req, res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = router