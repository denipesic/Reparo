<!DOCTYPE html>
<html>
<head>
	<title>{{$ticket->serial}}</title>
	<!-- <link rel="stylesheet" href="sass/main.css" media="screen" charset="utf-8"/> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="content-type" content="text-html; charset=utf-8">
	<style type="text/css">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

body {
  font-family: DejaVu Sans;
  font-size: 16px;
  margin: 0;
  padding: 5%;
  color: #555555;
}
body a {
  text-decoration: none;
  color: inherit;
}
body a:hover {
  color: inherit;
  opacity: 0.7;
}
body .container {
  min-width: 460px;
  margin: 0 auto;
  padding: 0 20px;
}
body .clearfix:after {
  content: "";
  display: table;
  clear: both;
}
body .left {
  float: left;
}
body .right {
  float: right;
}
body .helper {
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
body .no-break {
  page-break-inside: avoid;
}

header {
  margin-top: 15px;
  margin-bottom: 45px;
}
header figure {
  float: left;
  margin-right: 10px;
  width: 65px;
  height: 70px;
  background-color: #B2DDD4;
  text-align: center;
}
header figure img {
  margin-top: 10px;
}
header .company-info {
  float: right;
  color: #66BDA9;
  line-height: 14px;
}
header .company-info .address, header .company-info .phone, header .company-info .email {
  position: relative;
}
header .company-info .address img, header .company-info .phone img {
  margin-top: 2px;
}
header .company-info .email img {
  margin-top: 3px;
}
header .company-info .title {
  color: #66BDA9;
  font-weight: 400;
  font-size: 1.33333333333333em;
}
header .company-info .icon {
  position: absolute;
  left: -15px;
  top: 1px;
  width: 10px;
  height: 10px;
  background-color: #66BDA9;
  text-align: center;
  line-height: 0;
}

section .details {
  min-width: 440px;
  margin-bottom: 40px;
  padding: 25px;
  background-color: #f4f4f4;
  color: #000000;
  line-height: 20px;
}

section .header {
  min-width: 440px;
  margin-bottom: 40px;
  padding: 5px 10px;
  color: #000;
  line-height: 20px;
}

section .details .client {
  width: 50%;
}
section .details .client .name {
  font-size: 1.16666666666667em;
  font-weight: 600;
}
section .details .data {
  width: 50%;
  font-weight: 600;
  text-align: right;
}
section .details .title {
  margin-bottom: 5px;
  font-size: 1.33333333333333em;
  text-transform: uppercase;
}
section table {
  width: 100%;
  margin-bottom: 20px;
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
}
section table .qty, section table .unit, section table .total {
  width: 25%;
}
section table .serial{
  width: 33.32%;
}
section table .price, section table .pph, section table .work_total {
  width: 16.66%;
}

section table .desc {
  width: 50%;
}
section table thead {
  display: table-header-group;
  vertical-align: middle;
  border-color: inherit;
}
section table thead th {
  padding: 20px;
  background: #f4f4f4;
  
  color: #000;
  text-align: center;
  font-weight: 400;
  text-transform: uppercase;
}
section table thead th:last-child {
  border-right: none;
}
section table tbody tr:first-child td {
  border-top: 10px solid #ffffff;
}
section table tbody td {
  padding: 10px 10px;
  text-align: center;
  border-right: 3px solid #f4f4f4;
}
section table tbody td:last-child {
  border-right: none;
}
section table tbody td.desc {
  text-align: center;
}
section table tbody td.total {
  color: #66BDA9;
  font-weight: 600;
  text-align: right;
}
section table tbody h3 {
  margin-bottom: 5px;
  color: #66BDA9;
  font-weight: 600;
}
section table.grand-total {
  margin-bottom: 50px;
}
section table.grand-total tbody tr td {
  padding: 0px 10px 12px;
  border: none;
  background-color: #B2DDD4;
  color: #555555;
  font-weight: 300;
  text-align: right;
}
section table.grand-total tbody tr:first-child td {
  padding-top: 12px;
}
section table.grand-total tbody tr:last-child td {
  background-color: transparent;
}
section table.grand-total tbody .grand-total {
  padding: 0;
}
section table.grand-total tbody .grand-total div {
  float: right;
  padding: 11px 10px;
  background-color: #66BDA9;
  color: #ffffff;
  font-weight: 600;
}
section table.grand-total tbody .grand-total div span {
  display: inline-block;
  margin-right: 20px;
  width: 80px;
}

footer {
  margin-bottom: 15px;
  padding: 0 5px;
}
footer .thanks {
  margin-bottom: 40px;
  color: #66BDA9;
  font-size: 1.16666666666667em;
  font-weight: 600;
}
footer .notice {
  margin-bottom: 15px;
}
footer .end {
  padding-top: 5px;
  border-top: 2px solid #66BDA9;
  text-align: center;
}

.end-table td{
  border-right: none;
}
	</style>
</head>

<body>
	<section>
		<div class="container">
    <div class="header clearfix">
        <div class="client left">
          <img src="{{ url('/') }}/images/logo.png">
        </div>
        <div class="data right">
          <div class="title">Computer Centar</div>
          <div class="date">
           Vozišće 5, 51216, Viškovo <br> 
           091/250-6214 <br> 
           info@computer-centar.com
          </div>
        </div>
      </div>
			<div class="details clearfix">
				<div class="client left">
					<p class="name">{{$ticket->client_name}}</p>
					<p>{{$ticket->client_address}}</p>
					<p>{{$ticket->client_phone}}</p>
					<a href="mailto:{{$ticket->client_email}}">{{$ticket->client_email}}</a>
				</div>
				<div class="data right">
					<div class="title">{{$ticket->serial}}</div>
					<div class="date">
          Computer Centar Viškovo <br>
					Prijava: {{ $ticket->created_at->format('d.m.Y') }} <br>
          Izdano: {{ date('d.m.Y') }}
					</div>
				</div>
			</div>
      <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="desc">EVIDENCIJA PRIJAVE ZA SERVIS</td>
      </tr>
      </table>
			<table border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th class="qty">Uređaj</th>
						<th class="desc">Opis kvara</th>
						<th class="unit">Napomena</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="qty">{{ $ticket->client_device }}</td>
						<td class="qty">{{ $ticket->device_issue }}</td>
						<td class="unit">{{ $ticket->device_note }}</td>
					</tr>
				</tbody>
			</table>
      @if (!empty($works) && isset($works['0']) != NULL)
      <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="desc">EVIDENCIJA UTROŠENOG RADA</td>
      </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
              <th class="desc">Opis rada</th>
              <th class="price">Broj sati</th>
              <th class="pph">Cijena/sat</th>
              <th class="work_total">Ukupno</th>
            </tr>
          </thead>
          <tbody>          
                  @foreach ($works as $key => $work)
                    <tr>
                      <td class="desc">{{ $work }}</td>
                      <td class="qty">{{ $hours[$key] }}</td>
                      <td class="qty">{{ $pphs[$key] }} kn</td>
                      <td class="qty">{{ $work_totals[$key] }} kn</td>
                    </tr>
                  @endforeach
          </tbody>
      </table>
      @endif

      @if (!empty($parts) && isset($parts['0']) != NULL)
      <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="desc">EVIDENCIJA UGRAĐENIH DIJELOVA</td>
      </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
              <th class="desc">Komponenta</th>
              <th class="serial">Serijski broj</th>
              <th class="pph">Cijena</th>
            </tr>
          </thead>
          <tbody>          
                  @foreach ($parts as $key => $part)
                    <tr>
                      <td class="desc">{{ $part }}</td>
                      <td class="serial">{{ $serial[$key] }}</td>
                      <td class="pph">{{ $prices[$key] }} kn</td>
                    </tr>
                  @endforeach
          </tbody>
      </table>
      @endif
      @if(isset($works['0']) != NULL || isset($parts['0']) != NULL)
      <table style="height: 10px;"></table>
			<div class="no-break">
				<table class="grand-total">
					<tbody>
						<tr class="total">
							<td class="grand-total" colspan="4">
                <div>
                  UKUPNO: {{ $ukupno }} kn
                </div>
              </td>
						</tr>
					</tbody>
				</table>
			</div>
      @endif
      <table cellspacing="10">
        <tr>
          <td> </td>
        </tr>
      </table>
      <table>
        <tr>
          <td style="text-align: justify;">
            NAPOMENA: svi uređaji koji su popravljeni čuvaju se 30 dana od obavjesti vlasnika. Nakon tog roka servis više ne odgovara za njih, tj. isti
se prodaju da se namire troškovi nastali u servisu ili ako nije moguće nadoknaditi nastale troškove isti se zbrinjavaju kao otpad.
          </td>
        </tr>
      </table>
      <table class="end-table">
        <tr>
          <td>ZAPRIMIO</td>
          <td>PREDAO</td>
          <td>PREUZEO</td>
        </tr>
      </table>
		</div>
	</section>
</body>

</html>
