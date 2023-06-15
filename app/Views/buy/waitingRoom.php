<!DOCTYPE html>
<html>

<head>
    <title>Please wait ( Wait for me! )</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <style>
        body {
            background: #595BD4;
            font-family: 'Titillium Web', sans-serif;
        }

        .loading {
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            width: 100px;
            color: #FFF;
            margin: auto;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .loading span {
            position: absolute;
            height: 10px;
            width: 84px;
            top: 50px;
            overflow: hidden;
        }

        .loading span>i {
            position: absolute;
            height: 4px;
            width: 4px;
            border-radius: 50%;
            -webkit-animation: wait 4s infinite;
            -moz-animation: wait 4s infinite;
            -o-animation: wait 4s infinite;
            animation: wait 4s infinite;
        }

        .loading span>i:nth-of-type(1) {
            left: -28px;
            background: yellow;
        }

        .loading span>i:nth-of-type(2) {
            left: -21px;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            background: lightgreen;
        }

        @-webkit-keyframes wait {
            0% {
                left: -7px
            }

            30% {
                left: 52px
            }

            60% {
                left: 22px
            }

            100% {
                left: 100px
            }
        }

        @-moz-keyframes wait {
            0% {
                left: -7px
            }

            30% {
                left: 52px
            }

            60% {
                left: 22px
            }

            100% {
                left: 100px
            }
        }

        @-o-keyframes wait {
            0% {
                left: -7px
            }

            30% {
                left: 52px
            }

            60% {
                left: 22px
            }

            100% {
                left: 100px
            }
        }

        @keyframes wait {
            0% {
                left: -7px
            }

            30% {
                left: 52px
            }

            60% {
                left: 22px
            }

            100% {
                left: 100px
            }
        }
    </style>
</head>

<body>
    <div class="loading">
        <p>Please wait</p>
        <span><i></i><i></i></span>
    </div>
</body>

<script>
    setTimeout(function () {
        window.location.href = 'http://www.google.com';
    }, 2000);
</script>

</html>