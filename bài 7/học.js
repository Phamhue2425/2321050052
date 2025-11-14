let DanhSachPhim = [
    {
        id: 1,
        TenPhim: 'Mưa  đỏ',
        nam: 2025,
        tuoi: 16,
        ThoiLuong: 2,
        QuocGia: "Việt Nam",
        poster: 'muado.jpg',
        TheLoai:"Phim Việt Nam"
    },
    {
        id: 2,
        TenPhim: 'Conan',
        nam: 2023,
        tuoi: 10,
        ThoiLuong: 1.5,
        QuocGia: "Nhật Bản",
        poster: 'conan.jpg',
        TheLoai:"Phim hoạt hình"
    },
    {
        id: 3,
        TenPhim: 'Panda',
        nam: 2001,
        tuoi: 17,
        ThoiLuong: 1.7,
        QuocGia: "Trung Quốc",
        poster: 'panda.jpg',
        TheLoai:"Phim hoạt hình"
    },
    {
        id: 4,
        TenPhim: 'Cùng em bay lượn theo gió',
        nam: 2001,
        tuoi: 17,
        ThoiLuong: 1.7,
        QuocGia: "Trung Quốc",
        poster: 'cungem.png',
        TheLoai:"Phim Trung Quốc"
    },
    {
        id: 5,
        TenPhim: 'Cuộc đời của bạch tiểu thư bị tiết lộ rồi',
        nam: 2001,
        tuoi: 17,
        ThoiLuong: 1.7,
        QuocGia: "Trung Quốc",
        poster: 'bachtieuthu.png',
        TheLoai:"Phim Trung Quốc"
    },
];

// let PhimHienTai = DanhSachPhim[0];
// let banner = document.getElementsByClassName('anh2')[0]
let nam = document.getElementsByClassName('nam')[0]
let tuoi = document.getElementsByClassName('tuoi')[0]
let ThoiLuong = document.getElementsByClassName('thoiluong')[0]
let QuocGia = document.getElementsByClassName('quocgia')[0]

// function ChonPhim(idPhim){
//     for(let i = 0; i < DanhSachPhim.length; i++){
//         if(DanhSachPhim[i].id == idPhim){
//             banner.style.backgroundImage = DanhSachPhim[i].poster
//             nam.innerHTML = DanhSachPhim[i].poster
//         }
//     }
// }

let banner = document.getElementsByClassName("anh2")[0];
// let filmNameElement = document.getElementsByClassName("ten")[0];
// let filmNationElement = document.getElementsByClassName("tt-nation")[0];
function XemNgay(){
   let trailer = document.getElementsByClassName("trailer")[0];
    banner.style.display = "none";
    
    //bannerElement.computedStyleMap.display = "none";
    trailer.style.display = "block";
    
}

let PhimHienTai = DanhSachPhim[0];
// function chooseFilm(filmId){
//     let selectedFilm = listFilm.find(film => film.id ===filmId);
//     bannerElement.style.backgroundImage = "url" + "('" + selectedFilm.banner + "')";
//     filmNationElement.innerText = selectedFilm.nation;
// }
function ChonPhim(id){
    for ( let i = 0; i < DanhSachPhim.length; i ++){
        if ( id == DanhSachPhim[i].id){
            PhimHienTai = DanhSachPhim[i];
        }
    }
    let selectedFilm = DanhSachPhim.find(film => film.id === id);
    banner.style.backgroundImage = "url" + "('" + selectedFilm.poster + "')" ;
    nam.innerHTML = PhimHienTai.nam;
    QuocGia.innerHTML = PhimHienTai.QuocGia;
    tuoi.innerHTML = PhimHienTai.tuoi;
    ThoiLuong.innerHTML = PhimHienTai.ThoiLuong;
}