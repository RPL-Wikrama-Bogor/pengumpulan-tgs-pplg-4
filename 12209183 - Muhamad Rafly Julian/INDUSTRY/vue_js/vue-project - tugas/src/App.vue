<template>
  <div class="head">
    <h1>Data Siswa</h1>
  </div>

  <div class="body">
    <div class="container">
      <input class="input" type="text" placeholder="Masukkan Nama" v-model="formDataKelas.nama">
      <br>
      <input class="input" type="text" placeholder="Masukkan Kelas" v-model="formDataKelas.kelas">
      <br>
      <button class="plus" @click="tambahKelas">Tambah Siswa</button>
    </div>
    <table class="table">
      <tr>
        <th> Id</th>
        <th> Nama</th>
        <th> Kelas</th>
        <th> Aksi</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td><button class="del" @click="hapusDataKelas(murid.id)">Hapus</button></td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dataKelas: [{
        id: Date.now(),
        nama: 'Fahrel',
        kelas: '11'
      }],
      formDataKelas: {
        nama: '',
        kelas: ''
      }
    }
  },

  methods: {
    tambahKelas() {
      this.formDataKelas.id = Date.now();
      this.dataKelas.push(this.formDataKelas);
      this.formDataKelas = {
        nama: '',
        keals: ''
      }
    },
    hapusDataKelas(id) {
      if (this.dataKelas = this.dataKelas.filter(item => item.id != id)) {
        alert('Data berhasil Dihapus!');
      } else {
        alert('Data Gagal Dihapus!');
      }

    }
  }
}
</script>