let listFilm = [
    {
        id: 1,
        ten: " Mưa đỏ",
        theloai: "Phim chiếu rạp",
        banner: "350x495-muado.jpg",
        trailer: "https://youtu.be/BD6PoZJdt_M?si=KR8RHXRfSkxyhtxq",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
        
    },
    {
        id: 2,
        ten: " Địa Đạo",
        theloai:" Phim chiếu rạp",
        banner:"diadao.jpg",
        trailer:"https://www.youtube.com/embed/zMLaRfAilvA?si=W9GN-Whfa-n32zRs",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
    },
    {
        id: 3,
        ten: " Mang mẹ đi bỏ",
        theloai:" Phim chiếu rạp",
        banner:"mangmedibo.jpg",
        trailer:"",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"

    },
    {
        id: 4,
        ten: " Quỷ nhập tràng",
        theloai:" Phim chiếu rạp",
        banner:"quynhaptrang.jpg",
        trailer:"",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "18T",
        thoiluong: " 2 giờ"

    },
    {
        id: 5,
        ten: " Bộ tứ báo thủ",
        theloai:" Phim chiếu rạp",
        banner:"botubaothu.jpg",
        trailer:"",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "15T",
        thoiluong: " 2 giờ"

    },
    {
        id: 6,
        ten: " Gia đình là số 1 (Phần 1)",
        theloai:" Cày phim hay mỗi ngày",
        banner:"/FPT/Screenshot 2025-09-15 100838.png",
        trailer:"",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "13T",
        thoiluong: " 119 tập/119 tập"

    },
    {
        id: 7,
        ten: " Hồ sơ X",
        theloai:" Cày phim hay mỗi ngày",
        banner:"/FPT/hồ sơ x.png",
        trailer:"",
        nation:"Hàn Quốc",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 24 tập/24 tập"

    },
    {
        id: 8,
        ten: " Pháp sư vô tâm",
        theloai:" Cày phim hay mỗi ngày",
        banner:"/FPT/pháp sư vô tâm.png",
        trailer:"",
        nation:"Trung Quốc",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 24 tập"

    },
    {
        id: 9,
        ten: " Vượt lên định kiến",
        theloai:" Cày phim hay mỗi ngày",
        banner:"/FPT/vươhht lên định kiến.png",
        trailer:"",
        nation:"Mỹ ",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 24 tập/28 tập"

    },
    {
        id: 10,
        ten: " Ngôi nhà bí mật",
        theloai:" Cày phim hay mỗi ngày",
        banner:"/FPT/ngô nhà bí mật.png",
        trailer:"",
        nation:"Hàn Quốc",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 24 tập/38 tập"

    },

    {
       id: 11,
        ten: "Tử chiến trên không",
        theloai: "Mới ra mắt",
        banner: "tuchientren_khong.jpg",
        trailer: "",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
 
    },
    {
       id: 12,
        ten: "Way back love",
        theloai: "Mới ra mắt",
        banner: "waybacklove.jpeg",
        trailer: "",
        nation:"Hàn",
        nam: "2025",
        tuoi: "15T",
        thoiluong: " 24 tập"
 
    },
    {
       id: 13,
        ten: "Nhà gia tiên",
        theloai: "Mới ra mắt",
        banner: "nhagiatien.jpg",
        trailer: "",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
 
    },
    {
       id: 14,
        ten: "lật mặt 8",
        theloai: "Mới ra mắt",
        banner: "latmat8.jpg",
        trailer: "",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
    },
    {
       id: 15,
        ten: "Bộ tứ báo thủ",
        theloai: "Mới ra mắt",
        banner: "botubaothu.jpg",
        trailer: "",
        nation:"Việt Nam",
        nam: "2025",
        tuoi: "16T",
        thoiluong: " 2 giờ"
 
    },

];

let bannerElement = document.getElementsByClassName("banner")[0];
// let filmNameElement = document.getElementsByClassName("ten")[0];
// let filmNationElement = document.getElementsByClassName("tt-nation")[0];
function xemNgay(){
   let trailerElement = document.getElementsByClassName("trailer")[0];
    bannerElement.style.display = "none";
    
    //bannerElement.computedStyleMap.display = "none";
    trailerElement.style.display = "block";
    
}

let phimHienTai = listFilm[0];
// function chooseFilm(filmId){
//     let selectedFilm = listFilm.find(film => film.id ===filmId);
//     bannerElement.style.backgroundImage = "url" + "('" + selectedFilm.banner + "')";
//     filmNationElement.innerText = selectedFilm.nation;
// }
function chonPhim(id){
    for ( let i = 0; i < listFilm.length; i ++){
        if ( id == listFilm[i].id){
            phimHienTai = listFilm[i];
        }
    }
    document.getElementsByClassName("banner")[0].getElementsByTagName("img")[0].src = phimHienTai.banner;
    document.getElementsByClassName("nam")[0].innerHTML = phimHienTai.nam;
    document.getElementsByClassName("nation")[0].innerHTML = phimHienTai.nation;
    document.getElementsByClassName("tuoi")[0].innerHTML = phimHienTai.tuoi;
    document.getElementsByClassName("thoiluong")[0].innerHTML = phimHienTai.thoiluong;
    

}