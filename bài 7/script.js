let DanhSachPhim = [
    {
        id: 1,
        TenPhim: 'Mưa  đỏ',
        NamPhatHanh: 2025,
        tuoi: 16,
        ThoiLuong: 2,
        QuocGia: "Việt Nam",
        poster: '/img/muado.jpg',
        TheLoai:"Phim Việt Nam"
    },
    {
        id: 2,
        TenPhim: 'Conan',
        NamPhatHanh: 2023,
        tuoi: 10,
        ThoiLuong: 1.5,
        QuocGia: "Nhật Bản",
        poster: '/img/conan.jpg',
        TheLoai:"Phim hoạt hình"
    },
    {
        id: 3,
        TenPhim: 'Panda',
        NamPhatHanh: 2001,
        tuoi: 17,
        ThoiLuong: 1.7,
        QuocGia: "Trung Quốc",
        poster: '/img/panda.jpg',
        TheLoai:"Phim hoạt hình"
    },
];

let PhimHienTai = DanhSachPhim[0];
let banner = document.getElementsByClassName('banner')[0]

function ChonPhim(idPhim){
    for(let i = 0; i < DanhSachPhim.length; i++){
        if(DanhSachPhim[i].id == idPhim){
            banner.computedStyleMap.backgroundImage = DanhSachPhim[i].poster
        }
    }
}