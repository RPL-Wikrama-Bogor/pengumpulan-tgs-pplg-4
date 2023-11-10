const http = require('http');

const movies = require('./data.js');

async function getFilteredMovies() {
    return new Promise((resolve) => {
        setTimeout(() => {
            const filteredMovies = movies.filter(movie => movie.year == 1994);
            resolve(filteredMovies);
        }, 4000);
    });
}

const server = http.createServer((req, res) => {
    switch (req.url) {
        case '/movies':
            console.log('Menampilkan film yang difilter...');
            getFilteredMovies()
                .then((filteredMovies) => {
                    res.write(JSON.stringify(filteredMovies));
                    res.end();
                })
                .catch((error) => {
                    res.write('Kesalahan Internal Server');
                    res.end();
                    console.error('Terjadi kesalahan:', error);
                });
            break;
    }
});

const port = 2000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);