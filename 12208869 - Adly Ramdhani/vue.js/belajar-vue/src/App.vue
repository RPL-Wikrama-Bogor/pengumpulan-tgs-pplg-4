<template>
  <div>
    <input type="text" placeholder="masukan nama" v-model="FormDataKelas.nama">
    <br><br>
    <input type="text" placeholder="masukan kelas" v-model="FormDataKelas.kelas">
    <br><br>
    <button @click="tambahKelas">Tambah siswa</button>
    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Action</th>
      </tr>
      <tr v-for="(murid, index) in dataKelas" :key="murid.id">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.kelas }}</td>
        <td><button @click="hapusDataKelas(murid.id)" type="button">Hapus</button></td>
      </tr>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dataKelas: [
        {
          id: Date.now(),
          nama: 'adly',
          kelas: '10',
        },
      ],
      FormDataKelas: {
        id: Date.now(),
        nama: '',
        kelas: '',
      },
    };
  },
  methods: {
    tambahKelas() {
      this.dataKelas.push(this.FormDataKelas);
      this.FormDataKelas = {
        id: Date.now(),
        nama: '',
        kelas: '',
      };
    },
    hapusDataKelas(id) {
      this.dataKelas = this.dataKelas.filter((item) => item.id !== id);
    },
  },
};
</script>
