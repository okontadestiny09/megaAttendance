import nigerianStates from './data.js';

const map = document.getElementById('map');

for (let x = 0; x < nigerianStates.length; x++) {
  let state = nigerianStates[x];

  map.innerHTML += `
    <div id="${state.name.toLowerCase()}">
      <a href="./states/${state.name.toLowerCase()}.html">
        ${state.name}
        <br>
        <span class="population" style="font-size: 9px; color: red">0</span>
      </a>
    </div>
  `;
}

let populations = document.querySelectorAll(".population");

for (let i = 0; i < populations.length; i++) {
  let finalPopulation = nigerianStates[i].population;
  let counter = 0;

  let interval = setInterval(() => {
    if (counter < finalPopulation) {
      counter += 10000;
      populations[i].textContent = counter;
    }
  }, 1); 
}