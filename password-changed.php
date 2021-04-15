<?php
session_start();

if (isset($_SESSION['email'])) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Zuri's Login</title>
</head>
<body>
<div class="card-index" style="background-color: none !important;">
    <div style="margin: 10px;">
        <h3>Password changed Successfully <a href="login.php">click here to login</a></h3>
   <span></span>
    </div>
    
    <div class="img" style="margin-left:0px; margin-left:0px">
    <svg id="ad3423d0-b1a8-4183-9d5d-a1b308e52494" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="400" height="524.00008" viewBox="0 0 575.8112 524.00008"><path d="M784.29645,603.05c-.00977,1.25-.04,2.49-.08985,3.74a266.15639,266.15639,0,0,1-64.27978,61.06q-4.27515,2.89508-8.66016,5.58a258.43374,258.43374,0,0,1-70.52978,30.11q-1.96509.50994-3.93018.99c-.93994.23-1.89013.46-2.83984.66-.58008-.05-1.15039-.1-1.72022-.15-.02978-.01-.06982-.01-.10009-.02-.23-.02-.46-.04-.67969-.05-.98-.09-1.96045-.18994-2.93994-.28l.22949.44.58008,1.1h-.00977c-.21-.36-.41992-.73-.62012-1.1-.08007-.13-.16992-.27-.23974-.41-.07031-.12-.14014-.25-.21045-.37-8.91992-15.52-17.71-31.61-19.96-49.31994-2.34961-18.54,4.25-39.52,20.56-48.63a33.50485,33.50485,0,0,1,6.75-2.83c.98-.29,1.97021-.53,2.97021-.75a35.27741,35.27741,0,0,1,41.02,45.86c13.83008-14.18,11.25-37.18,6.48-56.4-4.78027-19.23-10.56006-40.62006-.83984-57.88,5.3999-9.62,14.8999-15.58,25.56982-17.98.31982-.07.6499-.13995.98-.2a51.4763,51.4763,0,0,1,36.99024,6.48c20.38964,12.85,30.85986,37.21,34.25976,61.07A127.59785,127.59785,0,0,1,784.29645,603.05Z" transform="translate(-312.0944 -187.99996)" fill="#f2f2f2"/><path d="M645.96686,615.06a79.42873,79.42873,0,0,1,6.84961,49.38,81.279,81.279,0,0,1-18.87988,38.63c-.54981.63-1.10987,1.24-1.68018,1.84.92041-.06,1.8501-.13995,2.77051-.22.58984-.05,1.18994-.1,1.77978-.16-.93994.23-1.89013.46-2.83984.66-.58008-.05-1.15039-.1-1.72022-.15-.02978-.01-.06982-.01-.10009-.02-.23-.02-.46-.04-.67969-.05005-.98-.09-1.96045-.18994-2.93994-.28l.22949.44.58008,1.1h-.00977c-.21-.36-.41992-.73-.62012-1.1-.08007-.13-.16992-.27-.23974-.41.17969-.17.34961-.35.52-.53a76.74467,76.74467,0,0,0,6.61963-100.62c.98-.29,1.97021-.53,2.97021-.75A82.09908,82.09908,0,0,1,645.96686,615.06Z" transform="translate(-312.0944 -187.99996)" fill="#fff"/><path d="M735.96686,626.15a87.38911,87.38911,0,0,1-6.04,24.67,72.50257,72.50257,0,0,1-6.34033,11.89c-1.13965,1.76-2.36963,3.48-3.65967,5.14q-4.27515,2.89507-8.66016,5.58a74.8749,74.8749,0,0,0,5.33008-5.96c.93018-1.12,1.81006-2.27,2.65967-3.43994,9.51025-13.11,13.7002-28.89,14.42041-44.92.75977-17.17-1.47021-34.64-5.39014-51.33a215.09182,215.09182,0,0,0-18.10009-49.32,1.54252,1.54252,0,0,1,.62011-2.04,1.32734,1.32734,0,0,1,.98-.2,1.10211,1.10211,0,0,1,.75.65c.99024,1.93,1.96973,3.86,2.89991,5.82a217.6414,217.6414,0,0,1,17.06005,51.16C735.93659,590.91994,737.77692,608.77,735.96686,626.15Z" transform="translate(-312.0944 -187.99996)" fill="#fff"/><path d="M498.17667,700.84994c.36-.63.72-1.26,1.07-1.89,6.67-11.72,12.94-23.88,14.63-37.18,1.89-14.92-3.42-31.81-16.55-39.14a26.44233,26.44233,0,0,0-5.44-2.28c-.78-.23-1.58-.43-2.39-.61a28.40372,28.40372,0,0,0-33.02,36.92c-11.13-11.41-9.05-29.93-5.21-45.4,3.84-15.48,8.5-32.7.67-46.59-4.35-7.75-11.99-12.55-20.58-14.48-.26-.05-.53-.11-.79-.16a41.46543,41.46543,0,0,0-29.78,5.22c-16.41,10.34-24.84,29.95-27.58,49.16-.43,3.03-.73,6.1-.88,9.18-.06,1.08-.1,2.15-.12,3.23q7.905,9.555,16.78,18.43a267.147,267.147,0,0,0,27.27,23.81c1.32,1,2.64,1.98,3.98,2.95a259.198,259.198,0,0,0,71.62,36.83c1.41.46,2.84.92,4.26,1.36Z" transform="translate(-312.0944 -187.99996)" fill="#f2f2f2"/><path d="M496.11679,700.21c-1.41992-.44-2.8501-.9-4.26025-1.36-.81983-.99-1.6001-2-2.3501-3.04a65.50967,65.50967,0,0,1-11.46973-26.45,63.954,63.954,0,0,1,5.50977-39.75,66.59374,66.59374,0,0,1,5.95019-9.86c.81006.18,1.60987.38,2.39014.61a61.78022,61.78022,0,0,0,1.52,76.77C494.277,698.19,495.17685,699.21,496.11679,700.21Z" transform="translate(-312.0944 -187.99996)" fill="#fff"/><path d="M417.28671,591.55a152.5039,152.5039,0,0,0-4.33984,41.32,72.43268,72.43268,0,0,0,5.35986,25.05c.58985,1.39,1.23,2.75,1.93018,4.1-1.34033-.97-2.66016-1.95-3.98047-2.95-.09961-.23-.19971-.45-.28955-.68q-.65991-1.59007-1.23-3.21a71.68482,71.68482,0,0,1-3.64014-16.64c-1.45019-14,.02979-28.36,2.79981-42.11a174.9115,174.9115,0,0,1,13.73-41.18c.75-1.58,1.54-3.13,2.34033-4.68a.884.884,0,0,1,.59961-.53,1.11955,1.11955,0,0,1,.79.16,1.25271,1.25271,0,0,1,.5,1.65A172.71844,172.71844,0,0,0,417.28671,591.55Z" transform="translate(-312.0944 -187.99996)" fill="#fff"/><path d="M489.76276,587.87356a7.0063,7.0063,0,0,1-7.02927-1.28846l-11.12308-9.70086a7.0073,7.0073,0,0,1-.67474-9.87659L551.79,474.29885a7.00729,7.00729,0,0,1,9.87634-.6749l11.12348,9.70124a7.00749,7.00749,0,0,1,.67456,9.87613l-80.85422,92.70922A6.95839,6.95839,0,0,1,489.76276,587.87356Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M600.88892,485.85741a7.0338,7.0338,0,0,1-2.1438-.33691,6.95143,6.95143,0,0,1-4.09155-3.457l-6.76343-13.11817a7.00682,7.00682,0,0,1,3.01391-9.4292l109.33716-56.37164a7.00761,7.00761,0,0,1,9.42945,3.01416l6.76342,13.11817a7.00682,7.00682,0,0,1-3.01391,9.4292L604.083,485.0776A6.95541,6.95541,0,0,1,600.88892,485.85741Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M598.91773,489.03075A7.02045,7.02045,0,0,1,592.647,485.165l-6.62133-13.19043a6.98649,6.98649,0,0,1-.54248-4.81006c.04394-.17822.09472-.35693.15356-.53418h0c.13379-.40283.2793-1.03125.44751-1.75879.53662-2.32031,1.20434-5.208,2.56543-5.89111l48.04272-29.11963a6.99638,6.99638,0,0,1,9.41059,3.056l.02032.04016,12.11865,24.979a7.00666,7.00666,0,0,1-3.11816,9.39062l-53.12085,20.97217A6.85614,6.85614,0,0,1,598.91773,489.03075Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><circle cx="266.88015" cy="182.77235" r="53.51917" fill="#63b0ff"/><path d="M568.54175,710.61812H553.78247a7.00785,7.00785,0,0,1-7-7V578.60445a7.00787,7.00787,0,0,1,7-7h14.75928a7.00787,7.00787,0,0,1,7,7V703.61812A7.00785,7.00785,0,0,1,568.54175,710.61812Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M632.13477,652.434a6.99607,6.99607,0,0,1-5.70362-2.92578L554.88281,549.44185a7.00712,7.00712,0,0,1,1.62281-9.76562l12.00634-8.58447a7.00683,7.00683,0,0,1,9.76563,1.62256l71.54834,100.06591a7.0079,7.0079,0,0,1-1.623,9.76563l-12.00635,8.585A6.96317,6.96317,0,0,1,632.13477,652.434Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M613.15332,708.76021a9.63646,9.63646,0,0,1-4.22754-1.05761l-13.21289-6.57813c-3.45508-1.7207-5.35889-4.94238-4.2439-7.18164l34.053-68.39941c1.115-2.23926,4.83252-2.66211,8.28858-.94239l13.21264,6.57813a9.31856,9.31856,0,0,1,3.7876,3.29248,3.956,3.956,0,0,1,.45654,3.88916l-34.053,68.39941C616.56152,708.07174,615.01587,708.76021,613.15332,708.76021Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M548.91907,527.27932a7.02074,7.02074,0,0,1-7.33075-1.586l-20.02368-19.2128a6.9992,6.9992,0,0,1-.08057-9.8981l.00555-.00565L564.04779,459.783c1.03912-1.05875,3.99268-.80325,6.36511-.59979.74451.06421,1.38739.11953,1.81226.11615.18628-.00144.37183.00519.55518.0184h0a6.98773,6.98773,0,0,1,4.4096,1.99753l10.50977,10.36151a7.00864,7.00864,0,0,1,.07037,9.89972l-36.253,44.01425A7.05776,7.05776,0,0,1,548.91907,527.27932Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><path d="M571.8501,390.6083l-.05567-2c3.72071-.10352,7.001-.33692,9.46582-2.1377a6.14794,6.14794,0,0,0,2.38135-4.52832,3.51443,3.51443,0,0,0-1.15283-2.89453c-1.63623-1.38184-4.269-.93457-6.188-.05469l-1.65478.75879,3.17334-23.19043,1.98144.27149-2.69922,19.72656c2.60743-.7666,5.02344-.43652,6.67823.96094a5.471,5.471,0,0,1,1.86035,4.49218,8.13273,8.13273,0,0,1-3.2002,6.07325C579.273,390.40029,575.15723,390.51555,571.8501,390.6083Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><rect x="277.5057" y="170.53413" width="10.77148" height="2" fill="#2f2e41"/><rect x="243.5057" y="170.53413" width="10.77148" height="2" fill="#2f2e41"/><path d="M662.751,593.63717H496.26978a6.48605,6.48605,0,0,1-5.62915-9.75L573.8811,439.71041a6.43412,6.43412,0,0,1,5.6294-3.25h0a6.4337,6.4337,0,0,1,5.62915,3.25l83.24072,144.17676a6.50021,6.50021,0,0,1-5.62939,9.75Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><path d="M583.0188,316.5945c-5.93469-23.78921-28.93933-42.055-53.58893-41.60061a56.7718,56.7718,0,0,0-33.558,12.16809,54.24472,54.24472,0,0,0-12.30628,13.46454c-3.715,5.798-6.0477,12.343-7.869,18.949-3.67994,13.34775-5.41431,28.45185-14.75278,39.35221a41.0151,41.0151,0,0,1-31.03333,13.96118,38.31762,38.31762,0,0,1-30.29532-15.64337c-7.02932-9.37168-10.49-22.33283-6.429-33.64335,1.9928-5.55029,6.27786-10.79315,12.4064-11.71847a14.46161,14.46161,0,0,1,14.31824,6.85351c2.7561,4.836,1.87466,11.28885-1.57825,15.55448-3.63687,4.49286-9.71457,5.73691-15.075,3.93182a13.69785,13.69785,0,0,1-6.37582-4.52334c-1.1987-1.51374-3.32331.60852-2.13691,2.10669a17.34124,17.34124,0,0,0,15.83908,6.05148,16.18915,16.18915,0,0,0,12.90033-10.7796,16.43833,16.43833,0,0,0-2.999-16.615,17.58957,17.58957,0,0,0-16.33935-5.353c-6.3281,1.33978-10.92371,6.5444-13.30872,12.31155a34.35864,34.35864,0,0,0-1.7894,18.84928,44.16269,44.16269,0,0,0,20.21457,29.78112c10.66858,6.55072,23.9848,7.452,35.68872,3.24414a43.73771,43.73771,0,0,0,15.66861-9.64831,46.89393,46.89393,0,0,0,10.793-17.22522c5.27679-13.81628,6.04993-29.27655,13.51621-42.26358a53.188,53.188,0,0,1,28.93075-23.39575,49.736,49.736,0,0,1,36.91132,1.77185,54.31011,54.31011,0,0,1,26.29345,26.10653,48.61145,48.61145,0,0,1,3.05658,8.7288c.4682,1.87673,3.36542,1.09805,2.89771-.77671Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><path d="M591.24664,450.5h-22a6.50737,6.50737,0,0,1-6.5-6.5v-2a6.50738,6.50738,0,0,1,6.5-6.5h22a6.50737,6.50737,0,0,1,6.5,6.5v2A6.50736,6.50736,0,0,1,591.24664,450.5Z" transform="translate(-312.0944 -187.99996)" fill="#2f2e41"/><circle cx="163.15227" cy="412" r="6" fill="#e6e6e6"/><circle cx="453.15227" cy="316" r="6" fill="#f2f2f2"/><circle cx="77.15227" cy="342" r="6" fill="#f2f2f2"/><path d="M836.24664,450a259.67947,259.67947,0,0,1-52.04,156.79,266.15662,266.15662,0,0,1-64.27979,61.06q-4.27515,2.89508-8.66016,5.58a258.4336,258.4336,0,0,1-70.52978,30.11q-1.96509.50994-3.93018.99c-.93994.23-1.89013.46-2.83984.66-1.54.37-3.08008.71-4.63037,1.04h-.00977A263.82689,263.82689,0,0,1,574.24664,712q-3.59985,0-7.18994-.1-7.75488-.195-15.43017-.86a261.6136,261.6136,0,0,1-53.44971-10.19c-.69-.21-1.37012-.42-2.06006-.64-1.41992-.44-2.8501-.9-4.26025-1.36a259.19925,259.19925,0,0,1-71.61963-36.83c-1.34033-.97-2.66016-1.95-3.98047-2.95a267.1571,267.1571,0,0,1-27.26953-23.81q-8.88066-8.88-16.78028-18.43a259.43053,259.43053,0,0,1-45.16015-79.62c-48.08469-136.56033,23.639-286.24472,160.19931-334.32942A262.14532,262.14532,0,0,1,574.24664,188c39.54981,0,80.50977,10.06,118.4502,29.11l-.90039,1.78C654.13678,199.99,613.48688,190,574.24664,190c-143.35986,0-260,116.64-260,260a258.75062,258.75062,0,0,0,58.08008,163.6,261.8618,261.8618,0,0,0,42.41016,41.58q1.76949,1.38008,3.56982,2.74a259.41738,259.41738,0,0,0,71.19971,37.89q1.935.675,3.90039,1.32c1.92969.63,3.87988,1.25,5.83984,1.83a257.64438,257.64438,0,0,0,53.7002,10.17q7.67945.63,15.46973.8c1.93994.05,3.87988.07,5.83007.07a259.22129,259.22129,0,0,0,54.00977-5.65c.24023-.05.49023-.1.73047-.16q2.48951-.525,4.94971-1.12c1.91992-.44,3.81982-.92,5.72021-1.41a258.57909,258.57909,0,0,0,76.93994-34.19q3.53979-2.31006,6.98975-4.76a259.9236,259.9236,0,0,0,85.16015-325.14l1.81006-.86A259.67281,259.67281,0,0,1,836.24664,450Z" transform="translate(-312.0944 -187.99996)" fill="#e6e6e6"/><path d="M831.10675,339.21969c-25.21045,0-48.19238-6.12012-68.30737-18.19092-21.27368-12.76074-65.14649-5.37451-68.43653,1.13672l-4.03417,9.71533L701.6983,219.39205l.42774-.39844c.93579-.89551,23.72168-21.71875,83.4209,7.56739,45.312,22.22216,82.35205,11.749,96.17407,6.21484a4.50056,4.50056,0,0,1,6.17432,4.47754l-6.25,90.64111a4.4635,4.4635,0,0,1-3.106,3.97168A160.2745,160.2745,0,0,1,831.10675,339.21969Z" transform="translate(-312.0944 -187.99996)" fill="#63b0ff"/><path d="M697.17737,215.70357a6.91811,6.91811,0,0,0-6.91016,6.91016v232.793a6.91016,6.91016,0,0,0,13.82032,0v-232.793A6.91811,6.91811,0,0,0,697.17737,215.70357Z" transform="translate(-312.0944 -187.99996)" fill="#3f3d56"/></svg>
    </div   >
   
</div>
</body>
</html>