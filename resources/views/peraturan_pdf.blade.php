

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF</title>
  </head>
  <body>
    <div>
        <div><h3>Peraturan-peraturan ketika KBM</h3></div>
    </div>
    <div>
        <div>					
            <strong>Peraturan
            </strong>
            @foreach ($peraturan as $peraturans)
            {{-- <p>
              {{ $peraturans->peraturan }}
                
              
                1. Memberikan sambutan salam kepada guru yang baru memasuki kelas.<br>
                2. Selalu menggunakan seragam dengan benar dan rapi.<br>
                3. Mendengarkan dengan baik apa yang guru sampaikan.<br>
                3. Dilarang meninggalkan kelas sebelum diizinkan oleh guru.<br>
                4. Dilarang merokok,pacaran dan hal-hal sebagainya yang dilarang dalam islam.<br>
                5. Mengerjakan tugas yang diberikan oleh guru tepat pada waktunya.
            </p> --}}
            {{ $peraturans->peraturan }}
            @endforeach
        </div>
    </div>  
  </body>
</html>