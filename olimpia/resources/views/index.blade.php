<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="olimpia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téli olimpiai játékok</title>
</head>
<body>
    <nav class="bg-fej topnav">
    <h1 class="title-h1">Téli olimpiai játékok</h1>
    </nav>
    <div class="container2">
<h3>Kinai téli olompiai játékok</h3>
<div class="image-frame">
    <img src="img/2022_Winter_Olympics_logo.svg" class="kép">  
</div>
<div class="szoveg">
<a href="https://upload.wikimedia.org/wikipedia/commons/b/b4/2022_Winter_Olympics_logo.svg">eijing2022.cn,<a/>
Public domain, via Wikimedia Commons
</div>
     
    <div class="also-szoveg">
            A XXIV. téli olimpiai játékokat 2022. február 4. és február 20. között rendezték a kínai Pekingben. A rendező várost a 128. IOC gyűlésen választotta ki a Nemzetközi Olimpiai Bizottság 2015. július 31-én a malajziai Kuala Lumpurban. A 2022-es téli olimpiának 25 helyszíne van. A bázis Pekingben található, amely otthont ad például a jégkorong, a gyorskorcsolya, a curling versenyeknek. A 2022. február 4. és 20. között zajló pekingi téli olimpiai játékok egyetlen új, a játékokra emelt állandó helyszíne az Ice Ribbon, azaz Jégszalag.
            Peking a Kínai Népköztársaság fővárosa, négy tartományi jogú városának egyike, a Pekingi főegyházmegye érseki székvárosa. Pekinget északról, nyugatról, délről és kis részben keletről Hopej tartomány határolja, míg délkeletről Tiencsin tartománnyal szomszédos.
            </div>
</div>
<div class="container3">
    <h1>Helyszinek:</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Város</th>
                <th>Sportág</th>
                <th>Helyszín</th>
                <th>Versenyszámok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sportagak as $sportag)
            <tr>
                <td>{{ $sportag->varos }}</td>
                <td>{{ $sportag->sportagneve }}</td>
                <td>{{ $sportag->helyszin }}</td>
                <td>{{ $sportag->versenyszamok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<div style="background-color: #B5A642; padding: 20px;">
    <div class="container-k2eret">
        <div class="content" style="display: flex; flex-direction: column; align-items: center;">
            <h3 style="text-align: center; color: black;">Rövidpályás gyorskorcsolya a téli olimpiai játékokon</h3>

            <p style="text-align: justify; color: black;">A 2022. évi téli olimpiai játékokon a rövidpályás gyorskorcsolya versenyszámait a pekingi Fővárosi Fedett Stadionban rendezték február 5. és 16. között. A férfiaknak és a nőknek egyaránt 4–4 versenyszámban, illetve egy vegyes versenyszámban osztottak érmeket. A vegyes 2000 méteres váltó először szerepelt a téli olimpiai játékok programjában. <a href="https://hu.wikipedia.org/wiki/R%C3%B6vidp%C3%A1ly%C3%A1s_gyorskorcsolya" style="color: blue;">Rövidpályás gyorskorcsolya</a></p>
        <div class="content" style="display: flex; justify-content: space-between;display: flex; gap: 20px;">
            <div style="flex: 1;">
                <h3 style="text-align: center; color: black;">Téli olimpia története</h3>
                <div style="text-align: justify; color: black;">
                    <p>Az 1924. évi téli olimpiai játékok, később adott hivatalos nevén az I. téli olimpiai játékok egy több sportot magába foglaló nemzetközi sportesemény volt, melyet 1924. január 25. és február 5. között rendeztek meg a franciaországi Chamonix-ban. Hivatalosan Semaine Internationale des Sports d'Hiver (Télisportok Nemzetközi Hete) néven szerepelt az 1924. évi nyári olimpiai játékokkal, a Mont Blanc lábánál. Chamonix olimpiáját a Francia Olimpiai Bizottság rendezte meg, a várost a Nemzetközi Olimpiai Bizottság jelölte ki, mint az első téli olimpiai játékok házigazdáját. 1924-től egészen 1992-ig a téli olimpiákat a nyáriakkal megegyező években tartották.</p>
                    <p style="color: black;">A kép címe: "Készítette: Auguste Matisse - precise immediate image source is unknown. The poster is also on display at the website of the IOC.,Közkincs"</p>
                </div>
                <div style="text-align: center;">
                    <img src="img/1924WOlympicPoster.jpeg" class="kep1" style="margin: 10px;">
                    <br>
                    <a href="https://commons.wikimedia.org/w/index.php?curid=216754" style="color: blue;">Eredeti oldal</a>
                </div>
            </div>
            <div style="flex: 1;">
                <h3 style="text-align: center; color: black;">Rövid pályás gyorskorcsolya Magyarország</h3>
                <div style="text-align: justify; color: black;">
                    <p>Magyarország a kínai Pekingben megrendezett 2022. évi téli olimpiai játékok egyik részt vevő nemzete volt. Az országot az olimpián 5 sportágban 14 sportoló képviselte. Magyarország először szerzett egynél több érmet a téli olimpiai játékok történetében. Liu Shaoang Magyarország első egyéni téli olimpiai aranyérmét nyerte.</p>
                    <div style="text-align: center;">
                        <img src="img/magyar_rp_gyors_korcsolya.jpeg" class="kep2" style="margin: 10px;">
                        <p style="color: black;">A kép címe: "A magyar érmeket szállító short trackesek (balról): Liu Shaoang, Jászapáti Petra, Kónya Zsófia, Liu Shaolin Sándor és Krueger John-Henry (Fotó: Árvai Károly)"</p>
                    </div>
                </div>
                <p style="text-align: justify; color: black;">Maga a sportág 1992 óta szerepel az olimpiákon, és eddig 16 ország tudott érmet szerezni az azóta lebonyolított kilenc játékokon. Közülük a belgák most iratkoztak fel egy bronzéremmel. Az élen itt is Dél-Korea áll 26 arannyal és 53 éremmel, a kínaiaknak 12 aranyuk és 37 dobogós helyezésük, a kanadaiaknak 10 aranyuk és 37 medáliájuk van. Innentől kezdve viszont nagyon szoros a mezőny: az amerikaiaknak 4 aranyuk, az olaszoknak, a hollandoknak és Oroszországnak 3-3 olimpiai bajnoki címe van, és Liu Shaoang 500-as aranyával, 1000 méteres bronzával és a vegyes váltó harmadik helyével Magyarország az igen előkelő 8. helyre lépett előre a tizedikről, megelőzve Japánt és Ausztráliát is. A mieink négy éve iratkoztak fel a tabellára a férfiváltó aranyérmével.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div>
<div class="container-also">
    <h2>Rövidpályás gyorskorcsolya eredmények:</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Helyezés ID</th>
          <th>Helyezés</th>
          <th>Ország</th>
          <th>Arany</th>
          <th>Ezüst</th>
          <th>Bronz</th>
        </tr>
      </thead>
      <tbody>
        <?php
          
          $conn = new mysqli("127.0.0.1", "root", "", "teliolimpia");
    
          if ($conn->connect_error) {
            die("Sikertelen kapcsolódás: " . $conn->connect_error);
          }

          $sql = "SELECT helyezesID, helyezes, orszag, arany, ezust, bronz FROM rpgyorskorcsolyaeredmenyek";
          $result = $conn->query($sql);
        
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>".$row["helyezesID"]."</td>
                      <td>".$row["helyezes"]."</td>
                      <td>".$row["orszag"]."</td>
                      <td>".$row["arany"]."</td>
                      <td>".$row["ezust"]."</td>
                      <td>".$row["bronz"]."</td>
                    </tr>";
            }
          } else {
            echo "Nincsenek eredmények az adatbázisban.";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</div>
</body>
</html>
