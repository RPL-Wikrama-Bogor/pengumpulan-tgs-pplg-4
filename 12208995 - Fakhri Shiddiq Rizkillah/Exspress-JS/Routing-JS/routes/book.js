const express = require('express')
const router = express.Router()
const {
    getBooks
} = require('../controllers/BookController')

router.get('/', getBooks)

router.post('/', )

router.get('/:id',(req, res) => {

})

router.get('/:id', (req, res) =>
{
    res.write('GET book code')
    res.end()
})


router.put('/:id', (req, res) => {
    res.write('PUT book code')
    res.end()
})

router.post('/:id', (req, res) => {
    res.write('POST author code')
    res.end()
})

//router unutuk menghapus
router.delete('/', (req, res) => {
    res.write('DELETE book code')
    res.end()
})

module.exports = router

