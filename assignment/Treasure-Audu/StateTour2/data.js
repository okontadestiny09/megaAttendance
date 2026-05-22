const nigerianStates = [
  {
    id: 1,
    name: "Abia",
    capital: "Umuahia",
    governor: "Alex Otti",
    population: "4900000",
    mineralResources: ["Gold", "Oil & Gas", "Limestone"]
  },
  {
    id: 2,
    name: "Adamawa",
    capital: "Yola",
    governor: "Ahmadu Umaru Fintiri",
    population: "4900000",
    mineralResources: ["Gypsum", "Magnesite", "Bauxite", "Coal"]
  },
//   {
//     id: 3,
//     name: "Akwa Ibom",
//     capital: "Uyo",
//     governor: "Umo Eno",
//     population: "5500000",
//     mineralResources: ["Oil & Gas", "Limestone", "Clay", "Salt"]
//   },
  {
    id: 4,
    name: "Anambra",
    capital: "Awka",
    governor: "Charles Soludo",
    population: "5500000",
    mineralResources: ["Crude Oil", "Natural Gas", "Bauxite", "Ceramic Clay"]
  },
  {
    id: 5,
    name: "Bauchi",
    capital: "Bauchi",
    governor: "Bala Mohammed",
    population: "6500000",
    mineralResources: ["Gold", "Columbite", "Coal", "Limestone", "Iron Ore"]
  },
  {
    id: 6,
    name: "Bayelsa",
    capital: "Yenagoa",
    governor: "Douye Diri",
    population: "2300000",
    mineralResources: ["Crude Oil", "Natural Gas", "Clay", "Gypsum"]
  },
  {
    id: 7,
    name: "Benue",
    capital: "Makurdi",
    governor: "Hyacinth Alia",
    population: "5700000",
    mineralResources: ["Limestone", "Barite", "Coal", "Clay", "Lead-Zinc"]
  },
  {
    id: 8,
    name: "Borno",
    capital: "Maiduguri",
    governor: "Babagana Zulum",
    population: "5800000",
    mineralResources: ["Diatomite", "Clay", "Limestone", "Natural Gas"]
  },
//   {
//     id: 9,
//     name: "Cross River",
//     capital: "Calabar",
//     governor: "Bassey Otu",
//     population: "3800000",
//     mineralResources: ["Limestone", "Barite", "Oil & Gas", "Lead-Zinc"]
//   },
  {
    id: 10,
    name: "Delta",
    capital: "Asaba",
    governor: "Sheriff Oborevwori",
    population: "5600000",
    mineralResources: ["Crude Oil", "Natural Gas", "Silica Sand", "Clay"]
  },
  {
    id: 11,
    name: "Ebonyi",
    capital: "Abakaliki",
    governor: "Francis Nwifuru",
    population: "2800000",
    mineralResources: ["Lead-Zinc", "Salt", "Limestone", "Crude Oil"]
  },
  {
    id: 12,
    name: "Edo",
    capital: "Benin City",
    governor: "Monday Okpebholo",
    population: "4700000",
    mineralResources: ["Crude Oil", "Natural Gas", "Limestone", "Marble", "Gold"]
  },
  {
    id: 13,
    name: "Ekiti",
    capital: "Ado-Ekiti",
    governor: "Biodun Oyebanji",
    population: "3300000",
    mineralResources: ["Feldspar", "Granite", "Columbite", "Clay", "Bauxite"]
  },
  {
    id: 14,
    name: "Enugu",
    capital: "Enugu",
    governor: "Peter Mbah",
    population: "4400000",
    mineralResources: ["Coal", "Limestone", "Iron Ore", "Silica Sand"]
  },
  {
    id: 15,
    name: "Gombe",
    capital: "Gombe",
    governor: "Inuwa Yahaya",
    population: "3200000",
    mineralResources: ["Gypsum", "Limestone", "Coal", "Uranium"]
  },
  {
    id: 16,
    name: "Imo",
    capital: "Owerri",
    governor: "Hope Uzodinma",
    population: "5400000",
    mineralResources: ["Crude Oil", "Natural Gas", "Lead-Zinc", "Limestone"]
  },
  {
    id: 17,
    name: "Jigawa",
    capital: "Dutse",
    governor: "Umar Namadi",
    population: "5800000",
    mineralResources: ["Glass Sand", "Granite", "Kaolin", "Iron Ore"]
  },
  {
    id: 18,
    name: "Kaduna",
    capital: "Kaduna",
    governor: "Uba Sani",
    population: "8200000",
    mineralResources: ["Gold", "Gemstones", "Tantalite", "Columbite", "Iron Ore"]
  },
  {
    id: 19,
    name: "Kano",
    capital: "Kano",
    governor: "Abba Kabir Yusuf",
    population: "15000000",
    mineralResources: ["Limonite", "Glass Sand", "Gemstones", "Lead-Zinc"]
  },
  {
    id: 20,
    name: "Katsina",
    capital: "Katsina",
    governor: "Dikko Radda",
    population: "7800000",
    mineralResources: ["Kaolin", "Marble", "Salt", "Gold"]
  },
  {
    id: 21,
    name: "Kebbi",
    capital: "Birnin Kebbi",
    governor: "Nasir Idris",
    population: "4400000",
    mineralResources: ["Gold", "Clay", "Quartz", "Limestone"]
  },
  {
    id: 22,
    name: "Kogi",
    capital: "Lokoja",
    governor: "Ahmed Usman Ododo",
    population: "4500000",
    mineralResources: ["Iron Ore", "Coal", "Limestone", "Marble", "Feldspar"]
  },
  {
    id: 23,
    name: "Kwara",
    capital: "Ilorin",
    governor: "AbdulRahman AbdulRazaq",
    population: "3200000",
    mineralResources: ["Gold", "Tantalite", "Marble", "Feldspar"]
  },
//   {
//     id: 24,
//     name: "Lagos",
//     capital: "Ikeja",
//     governor: "Babajide Sanwo-Olu",
//     population: "15300000",
//     mineralResources: ["Crude Oil", "Natural Gas", "Silica Sand", "Clay"]
//   },
  {
    id: 25,
    name: "Nasarawa",
    capital: "Lafia",
    governor: "Abdullahi Sule",
    population: "2500000",
    mineralResources: ["Barite", "Salt", "Beryl", "Coal", "Tantalite"]
  },
  {
    id: 26,
    name: "Niger",
    capital: "Minna",
    governor: "Mohammed Umaru Bago",
    population: "5500000",
    mineralResources: ["Gold", "Talcs", "Lead-Zinc", "Granite"]
  },
//   {
//     id: 27,
//     name: "Ogun",
//     capital: "Abeokuta",
//     governor: "Dapo Abiodun",
//     population: "5200000",
//     mineralResources: ["Limestone", "Chalk", "Phosphate", "Clay"]
//   },
  {
    id: 28,
    name: "Ondo",
    capital: "Akure",
    governor: "Lucky Aiyedatiwa",
    population: "4700000",
    mineralResources: ["Bitumen", "Crude Oil", "Natural Gas", "Gemstones", "Granite"]
  },
  {
    id: 29,
    name: "Osun",
    capital: "Osogbo",
    governor: "Ademola Adeleke",
    population: "4700000",
    mineralResources: ["Gold", "Talc", "Feldspar", "Granite"]
  },
  {
    id: 30,
    name: "Oyo",
    capital: "Ibadan",
    governor: "Seyi Makinde",
    population: "7800000",
    mineralResources: ["Gemstones", "Gold", "Marble", "Clay"]
  },
  {
    id: 31,
    name: "Plateau",
    capital: "Jos",
    governor: "Caleb Mutfwang",
    population: "4200000",
    mineralResources: ["Tin", "Columbite", "Barite", "Gemstones", "Kaolin"]
  },
  {
    id: 32,
    name: "Rivers",
    capital: "Port Harcourt",
    governor: "Siminalayi Fubara",
    population: "7300000",
    mineralResources: ["Crude Oil", "Natural Gas", "Silica Sand", "Clay"]
  },
  {
    id: 33,
    name: "Sokoto",
    capital: "Sokoto",
    governor: "Ahmad Aliyu",
    population: "5000000",
    mineralResources: ["Phosphate", "Limestone", "Gypsum", "Gold", "Clay"]
  },
  {
    id: 34,
    name: "Taraba",
    capital: "Jalingo",
    governor: "Agbu Kefas",
    population: "3100000",
    mineralResources: ["Barite", "Lead-Zinc", "Gemstones", "Gold"]
  },
  {
    id: 35,
    name: "Yobe",
    capital: "Damaturu",
    governor: "Mai Mala Buni",
    population: "3300000",
    mineralResources: ["Diatomite", "Gypsum", "Epsomite", "Kaolin"]
  },
  {
    id: 36,
    name: "Zamfara",
    capital: "Gusau",
    governor: "Dauda Lawal",
    population: "4500000",
    mineralResources: ["Gold", "Lead-Zinc", "Chromite", "Granite"]
  }
];

export default nigerianStates;