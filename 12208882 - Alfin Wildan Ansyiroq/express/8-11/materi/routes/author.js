const express = require('express')
const router = express.Router()

//untuk menampilkan data
router.get('/', (req,res) => {
    res.write('GET author code')
    res.end()
})

//untuk mengirim data 
router.post('/', (req,res) => {
    res.write('POST author code')
    res.end()
})

// unruk memperbarui/update data
router.put('/', (req,res) => {
    res.write('PUT author code')
    res.end()
})

//untuk menghapus data
router.delete('/', (req,res) => {
    res.write('DELET author code')
    res.end()
})

module.exports = router