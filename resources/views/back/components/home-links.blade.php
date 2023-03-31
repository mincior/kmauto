<div class="card mb-3">
    <div class="card-header flex">
        <div class="row">

            <div class="col fs-5 text-end">
                <img src="{{ asset('img/icons/link.png') }}" />
                <img src="{{ asset('img/icons/home.png') }}" />
            </div>
        </div>
        <div >Km Auto. Copyright - Consolight SRL: Vicentiu Mincior, Razvan Duinea, Petrica Ilie @ 2023</div>
    </div>

    <div class="card-body">
        Scopul aplicatiei este sa gestioneze deplasarile masinilor consolight pe perioada de weekend si sarbatori legale, pentru a pune 
        la plata deplasarile in scop personal ale soferilor si mai ales pentru a percepe impozit pentru acest ‘beneficiu’ acordat
        salariatilor ce detin in custodie o masina apartinand Consolight SRL
        <hr />
        Aceasta aplicatie este <a href="https://www.php.net/" target="_blank">PHP 8.1</a> compatibila si a fost construita folosind :
        <ul>
            <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
            <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap 5</a></li>
            <li><a href="https://datatables.net/" target="_blank">DataTables</a></li>
        </ul>
        <hr />
        <b>Optiuni</b> :
        <ul>
            <li><b>Bara de navigare superioara</b> Pentru a naviga rapid in diversele parti ale aplicatiei</li>
            <li><b>Meniu lateral</b> pentru a accesa optiunile folosite mai rar</li>
            <li><b>Utilizatori</b> accesare de pe telefonul mobil printr-ul link plasat pe ecranul principal :</li>
            <ul>
                <li>Logare in aplicatie pe baza de adresa de email si parola 
                    (care vor fi salvate in telefon pentru a nu fi introduse de fiecare data manual)
                </li>
                <li>Selectare luna si interval de weekend pentru care se fac operatii</li>
                <li>Daca sunt mai multe operatii, ordinea acestora se va putea modifica grafic 
                    dupa pozitia lor in tabel</li>
                <li>Modificare inregistari (km, status, observatii) precum si posibilitaea mutarii in alt interval</li>
                <li>Stergerea, adaugarea de inregistrari</li>
                <li>Un raport sumar cu numarul de km parcursi in luna selectata precum si o estimare a sumei de plata
                    bazata pe pretul combustibilului din luna anterioara (daca luna este deschisa sau din luna selectata daca luna s-a inchis)
                </li>
                <li>Cautare in inregistrari cu evidentiere a cuvantului cautat</li>
                <li>Informatia este organizata pe pagini</li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </ul>
        <hr />
        <b>Optiune speciala</b> :
        <p>Bara de navigare de sus contine un selector pentru luna curenta si unul pentru intervalele de weekend ale lunii selectate.
            Acestea permit alegerea 'lunii curente' pentru care se fac prelucrari, introduceri de date, luna fiind editabila daca inca nu s-au transmis
            rapoartele la financiar sau 'doar in citire' daca da.
        </p>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col text-start md-6">
                <h5 id="MyClockDate" onload="showDate();"></h5>
            </div>

            <div class="col text-danger text-end">
                <h5 id="MyClockTime" onload="showDate();"></h5>
            </div>

        </div>
    </div>
</div>

@section('scripts')
    @parent

    <script type="text/javascript">
        $(function() {
            /* -------------------------------------------------------------------------------------------- */
            showTime();
            showDate();

            function showTime() {
                var now = dayjs();

                var h = now.hour();
                var m = now.minute();
                var s = now.second();

                if (h == 0 && m == 0 && s == 0) {
                    showDate();
                }

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                var time = h + ":" + m + ":" + s;
                document.getElementById("MyClockTime").textContent = time;

                setTimeout(showTime, 1000);
            }

            function showDate() {
                var now = dayjs();

                var d = now.date();
                var m = now.month() + 1;
                var y = now.year();

                d = (d < 10) ? "0" + d : d;
                m = (m < 10) ? "0" + m : m;

                var date = d + "-" + m + "-" + y;
                document.getElementById("MyClockDate").textContent = date;
            }
            /* -------------------------------------------------------------------------------------------- */
        });
    </script>
@endsection
