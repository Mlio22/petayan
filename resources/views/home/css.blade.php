@if ($loggedAs == 'petani')
<link href="css/styleHomePagePetani.css" rel="stylesheet">
@elseif ($loggedAs == 'swalayan')
<link href="css/styleHomePageSwalayan.css" rel="stylesheet">
@else
<link href="css/styleHomePage.css" rel="stylesheet">
@endif