# Save this as generate_states.ps1
$states = @(
    @{file="abia"; name="Abia"; capital="Umuahia"; governor="Alex Otti"; population="4.9 million"; resources="Gold, Oil & Gas, Limestone"},
    @{file="adamawa"; name="Adamawa"; capital="Yola"; governor="Ahmadu Umaru Fintiri"; population="4.5 million"; resources="Bentonite, Gypsum"},
    @{file="akwa-ibom"; name="Akwa Ibom"; capital="Uyo"; governor="Umo Eno"; population="5.5 million"; resources="Oil & Gas, Salt"},
    @{file="anambra"; name="Anambra"; capital="Awka"; governor="Charles Soludo"; population="6 million"; resources="Gas, Clay"},
    @{file="bauchi"; name="Bauchi"; capital="Bauchi"; governor="Bala Mohammed"; population="7.5 million"; resources="Gold, Tin"},
    @{file="bayelsa"; name="Bayelsa"; capital="Yenagoa"; governor="Douye Diri"; population="2.5 million"; resources="Oil & Gas"},
    @{file="benue"; name="Benue"; capital="Makurdi"; governor="Hyacinth Alia"; population="6 million"; resources="Coal, Limestone"},
    @{file="borno"; name="Borno"; capital="Maiduguri"; governor="Babagana Zulum"; population="7 million"; resources="Clay"},
    @{file="cross-river"; name="Cross River"; capital="Calabar"; governor="Bassey Otu"; population="4 million"; resources="Oil, Limestone"},
    @{file="delta"; name="Delta"; capital="Asaba"; governor="Sheriff Oborevwori"; population="6 million"; resources="Oil & Gas"},
    @{file="ebonyi"; name="Ebonyi"; capital="Abakaliki"; governor="Francis Nwifuru"; population="3 million"; resources="Salt, Lead"},
    @{file="edo"; name="Edo"; capital="Benin City"; governor="Monday Okpebholo"; population="5.2 million"; resources="Oil, Timber"},
    @{file="ekiti"; name="Ekiti"; capital="Ado-Ekiti"; governor="Biodun Oyebanji"; population="3.5 million"; resources="Granite, Gold"},
    @{file="enugu"; name="Enugu"; capital="Enugu"; governor="Peter Mbah"; population="4.5 million"; resources="Coal"},
    @{file="gombe"; name="Gombe"; capital="Gombe"; governor="Inuwa Yahaya"; population="3.5 million"; resources="Gypsum"},
    @{file="imo"; name="Imo"; capital="Owerri"; governor="Hope Uzodinma"; population="5.5 million"; resources="Oil & Gas"},
    @{file="jigawa"; name="Jigawa"; capital="Dutse"; governor="Umar Namadi"; population="6 million"; resources="Salt"},
    @{file="kaduna"; name="Kaduna"; capital="Kaduna"; governor="Uba Sani"; population="9 million"; resources="Gold, Tin"},
    @{file="kano"; name="Kano"; capital="Kano"; governor="Abba Yusuf"; population="15 million"; resources="Tin"},
    @{file="katsina"; name="Katsina"; capital="Katsina"; governor="Dikko Radda"; population="9 million"; resources="Gold"},
    @{file="kebbi"; name="Kebbi"; capital="Birnin Kebbi"; governor="Nasir Idris"; population="5.5 million"; resources="Gold"},
    @{file="kogi"; name="Kogi"; capital="Lokoja"; governor="Usman Ododo"; population="4.5 million"; resources="Iron Ore"},
    @{file="kwara"; name="Kwara"; capital="Ilorin"; governor="AbdulRahman AbdulRazaq"; population="3.5 million"; resources="Gold"},
    @{file="lagos"; name="Lagos"; capital="Ikeja"; governor="Babajide Sanwo-Olu"; population="15+ million"; resources="Sand, Bitumen"},
    @{file="nasarawa"; name="Nasarawa"; capital="Lafia"; governor="Abdullahi Sule"; population="3 million"; resources="Salt"},
    @{file="niger"; name="Niger"; capital="Minna"; governor="Umar Bago"; population="6 million"; resources="Gold"},
    @{file="ogun"; name="Ogun"; capital="Abeokuta"; governor="Dapo Abiodun"; population="6 million"; resources="Limestone"},
    @{file="ondo"; name="Ondo"; capital="Akure"; governor="Lucky Aiyedatiwa"; population="5 million"; resources="Bitumen"},
    @{file="osun"; name="Osun"; capital="Osogbo"; governor="Ademola Adeleke"; population="4 million"; resources="Gold"},
    @{file="oyo"; name="Oyo"; capital="Ibadan"; governor="Seyi Makinde"; population="7 million"; resources="Marble"},
    @{file="plateau"; name="Plateau"; capital="Jos"; governor="Caleb Mutfwang"; population="4 million"; resources="Tin"},
    @{file="rivers"; name="Rivers"; capital="Port Harcourt"; governor="Siminalayi Fubara"; population="8 million"; resources="Oil & Gas"},
    @{file="sokoto"; name="Sokoto"; capital="Sokoto"; governor="Ahmad Aliyu"; population="6 million"; resources="Clay"},
    @{file="taraba"; name="Taraba"; capital="Jalingo"; governor="Agbu Kefas"; population="3.6 million"; resources="Bauxite"},
    @{file="yobe"; name="Yobe"; capital="Damaturu"; governor="Mai Mala Buni"; population="3.5 million"; resources="Gypsum"},
    @{file="zamfara"; name="Zamfara"; capital="Gusau"; governor="Dauda Lawal"; population="5.8 million"; resources="Gold"}
)

foreach ($s in $states) {
    $content = @"
<!DOCTYPE html>
<html>
<head>
    <title>$($s.name) State</title>
</head>
<body>
    <h1>$($s.name) State</h1>
    <p><b>Capital:</b> $($s.capital)</p>
    <p><b>Governor:</b> $($s.governor)</p>
    <p><b>Population:</b> $($s.population)</p>
    <p><b>Mineral Resources:</b> $($s.resources)</p>
</body>
</html>
"@

    $filename = "$($s.file).html"
    $content | Out-File -FilePath $filename -Encoding UTF8
}

Write-Host "✅ All 36 state files created successfully!"