<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Obrolan
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard-pro.min.css') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/default.html " target="_blank"> <img src="../../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">SITIK</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">
                        <div
                            class="icon icon-shape icon-sm text-center  me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-align-left-2 text-dark text-sm"></i>
                        </div>
                        <span class="nav-link-text ms-1">Product</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">

        <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
            id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="text-white" href="javascript:;">
                                <i class="ni ni-box-2"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">DataTables</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0 text-white">DataTables</h6>
                </nav>
                <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                    <a href="javascript:;" class="nav-link p-0">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            @auth
                            <span class="d-sm-inline text-white d-none">{{ __(Auth::user()->name) }}</span>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}"
                                class="nav-link text-white font-weight-bold px-0" target="_blank">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                            @endguest
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="card blur shadow-blur max-height-vh-70 overflow-auto overflow-x-hidden mb-5 mb-lg-0">
                        <div class="card-header p-3">
                            <h6>Obrolan</h6>
                        </div>
                        <div class="card-body p-2" id="chats">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="card blur shadow-blur max-height-vh-70" id="chatroom">
                        <div class="card-header shadow-lg">
                            <div class="row">
                                <div class="col-lg-10 col-8">
                                    <div class="d-flex align-items-center">
                                        {{-- <img alt="Image" src="../../assets/img/team-2.jpg" class="avatar"> --}}
                                        <div class="ms-3">
                                            <h6 class="mb-0 d-block">-</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <a role="button" class="btn btn-primary" href="{{ route('checkout') }}"
                                        onclick="event.preventDefault(); document.getElementById('selesai-form').submit();">
                                        Selesai
                                    </a>

                                    <form id="selesai-form" action="{{ route('checkout') }}" method="POST" class="d-none">
                                        @csrf

                                        <input type="hidden" name="transactionID" value="{{ $transactionID }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto overflow-x-hidden" id="chatrooms">
                        </div>
                        <div class="card-footer d-block">
                            <form id="messageform" class="align-items-center">
                                <div class="d-flex">
                                    <div class="input-group">
                                        <input type="text" id="messagebox" class="form-control" placeholder="Ketik pesan" aria-label="Ketik pesan" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                    <button type="submit" class="btn bg-gradient-primary mb-0 ms-2" >
                                        <i class="ni ni-send"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart text-warning"></i> by
                                <a href="https://www.billingmikrotik.com" class="font-weight-bold"
                                    target="_blank">Breathy</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.billingmikrotik.com" class="nav-link text-muted"
                                        target="_blank">Billing Mikrotik</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script src="{{ asset('assets/js/socketio.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/moment.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script>
    </script>
    <script>
        // let socket = io('http://localhost:3000');
        let socket = io('https://chat.sitik.pro');
        let username = "";
        let userID = {{ auth()->user()->id }};
        let receiver = 0;
        let currentRoom = "";

        $(document).ready(function() {
            $("#messageform").submit(function(event) {
                event.preventDefault();
                sendMessage();
            });
        });

        socket.on('messageReceived', () => {
            $("#messagebox").val("");
        });

        socket.on('receiveRoomsInfo', (data) => {
            data.forEach(element => {
                let usrID = 0;
                if (element.sender_id === userID) {
                    usrID = element.receiver_id;
                } else {
                    usrID = element.sender_id;
                }
                socket.emit('getRoom', {chatroomID: element.id, userID: usrID});
            });
        });

        socket.on('connect', () => {
            socket.emit('getRooms', userID);
            console.log('connected');
        });

        socket.on('disconnect', () => {
            socket.emit('unregister', currentRoom);
        });

        socket.on('newMessage', (data) => {
            console.log(data);
            if (data.sender_id !== userID) {
                let temp = `<div class="row justify-content-end text-right mb-4" id="${data.id}">
                    <div class="col-auto">
                        <div class="card bg-gray-200">
                            <div class="card-body py-2 px-3">
                                <p class="mb-1"> ${data.message} <br>
                                </p>
                                <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>${parsing(data.timestamp)}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                $('#chatrooms').append(temp);
            } else {
                let temp = `<div class="row justify-content-start mb-4" id="${data.id}">
                    <div class="col-auto">
                        <div class="card ">
                            <div class="card-body py-2 px-3">
                                <p class="mb-1"> ${data.message} </p>
                                <div class="d-flex align-items-center text-sm opacity-6">
                                    <i class="ni ni-check-bold text-sm me-1"></i>
                                    <small>${parsing(data.timestamp)}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
                $('#chatrooms').append(temp);
            }
            console.log(data);
        });

        socket.on('receiveRoomChat', (data) => {
            let rec = data.room[0].receiver_id;
            let sen = data.room[0].sender_id;

            if (userID === rec) {
                socket.emit('getUserInfo', sen);
            } else {
                socket.emit('getUserInfo', rec);
            }

            let currentTime = "";
            let lastTime = ""
            data.chats.forEach((item) => {
                currentTime = parseDate(item.timestamp);
                if (currentTime !== lastTime) {
                    let temp = `<div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <span class="badge text-dark">${parseDay(item.timestamp)}</span>
                        </div>
                    </div>`;
                    $("#chatrooms").append(temp);
                }
                if (item.sender_id === userID) {
                    let temp = `<div class="row justify-content-end text-right mb-4" id="${item.id}">
                        <div class="col-auto">
                            <div class="card bg-gray-200">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1"> ${item.message} <br>
                                    </p>
                                    <div class="d-flex align-items-center justify-content-end text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>${parsing(item.timestamp)}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    $('#chatrooms').append(temp);
                } else {
                    let temp = `<div class="row justify-content-start mb-4" id="${item.id}">
                        <div class="col-auto">
                            <div class="card ">
                                <div class="card-body py-2 px-3">
                                    <p class="mb-1"> ${item.message} </p>
                                    <div class="d-flex align-items-center text-sm opacity-6">
                                        <i class="ni ni-check-bold text-sm me-1"></i>
                                        <small>${parsing(item.timestamp)}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    $('#chatrooms').append(temp);
                }
                lastTime = parseDate(item.timestamp);
                console.log(item.message);
            });
            console.log(data);
        });

        socket.on('receiveRoomInfo', (data) => {
            console.log(data);
            const waktuTerakhirPesan = moment(data.lastMessage[0].timestamp);
            // Waktu sekarang
            const waktuSekarang = moment();

            // Menghitung perbedaan waktu dan mendapatkan format yang lebih mudah dibaca
            const waktuYangLalu = waktuTerakhirPesan.fromNow();

            // Menampilkan hasil perbedaan waktu
            console.log(`Pesan terakhir terkirim ${waktuYangLalu}`);
            let temp = `<a href="javascript:;" class="d-block p-2" id="${data.room[0].id}" onclick="setActiveChat('${data.room[0].id}')">
                <div class="d-flex p-2">
                    <div class="ms-3">
                        <h6 class="mb-0">${data.user[0].name}</h6>
                        <p class="text-muted text-xs mb-2">${waktuYangLalu}</p>
                        <span class="text-muted text-sm col-11 p-0 text-truncate d-block">${data.lastMessage[0].message}</span>
                    </div>
                </div>
            </a>`;
            $("#chats").append(temp);
        });

        socket.on('userInfo', (data) => {
            $("#chatroom .card-header .row .col-lg-10 .d-flex .ms-3 .mb-0").text(`${data[0].name}`);
        });

        function sendMessage() {
            let message = $("#messagebox").val();
            let data = {roomID: currentRoom, message: message, senderID: userID, receiverID: receiver};
            socket.emit('sendMessage', data);
        }

        function loadChat(roomID) {
            socket.emit('getChat', roomID);
        }

        function setActiveChat(roomID) {
            console.log(`set Active : ${roomID}`);
            $("#chatrooms").empty();
            if (currentRoom !== "") {
                $(`#${currentRoom}`).removeClass("border-radius-lg bg-gradient-primary");
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[0]).removeClass("text-white");
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[0]).addClass("text-muted");
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[1]).removeClass('text-white');
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[1]).addClass('text-muted');
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[2]).addClass('text-muted');
                $($($($(`#${currentRoom}`).children()[0]).children()[0]).children()[2]).removeClass('text-white');
                $(`#${roomID}`).addClass("border-radius-lg bg-gradient-primary");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[0]).addClass("text-white");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[1]).addClass("text-white");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[0]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[1]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[2]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[2]).addClass("text-white");
                currentRoom = roomID;
            } else {
                $(`#${roomID}`).addClass("border-radius-lg bg-gradient-primary");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[0]).addClass("text-white");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[1]).addClass("text-white");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[0]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[1]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[2]).removeClass("text-muted");
                $($($($(`#${roomID}`).children()[0]).children()[0]).children()[2]).addClass("text-white");
                currentRoom = roomID;
            }
            if (currentRoom === "") {
                socket.emit("register", {
                    userID: userID,
                    chatroomID: roomID,
                });
            } else {
                socket.emit('unregister', currentRoom);
                socket.emit("register", {
                    userID: userID,
                    chatroomID: roomID,
                });
            }
            loadChat(roomID);
        }

        function parseDate(timestamp) {
            const tanggal = new Date(timestamp);

            const tanggalFormat = tanggal.getUTCDate();
            const bulanFormat = tanggal.getUTCMonth() + 1;
            const tahunFormat = tanggal.getUTCFullYear();

            const tanggalString = tanggalFormat.toString().padStart(2, "0");
            const bulanString = bulanFormat.toString().padStart(2, "0");

            const formatTanggal = `${tanggalString}-${bulanString}-${tahunFormat}`;

            return formatTanggal;
        }

        function parseDay(timestamp) {
            const tanggal = new Date(timestamp);
            const namaHari = [
                "Minggu",
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jumat",
                "Sabtu"
            ];

            // Mendapatkan nama hari dari timestamp
            const namaHariTerurai = namaHari[tanggal.getUTCDay()];

            return namaHariTerurai;
        }

        function parsing(timestamp) {
            const tanggal = new Date(timestamp);

            // Mendapatkan jam, menit, dan detik dalam format jam 24
            const jam = tanggal.getUTCHours();
            const menit = tanggal.getUTCMinutes();
            const detik = tanggal.getUTCSeconds();

            // Format jam jika perlu menambahkan 0 di depan angka tunggal (misalnya, 09:05:02)
            const jamFormat = (jam < 10 ? "0" : "") + jam;
            const menitFormat = (menit < 10 ? "0" : "") + menit;
            const detikFormat = (detik < 10 ? "0" : "") + detik;

            // Hasil format jam 24
            const waktuFormat = `${jamFormat}:${menitFormat}`;//:${detikFormat}`;
            return waktuFormat;
        }

        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="{{ asset('assets/js/argon-dashboard-pro.min.js') }}"></script>
</body>
</html>
