document.getElementById('calculateBtn').addEventListener('click', calculateGenotype);

function calculateGenotype() {
    const mother = document.getElementById('mother').value;
    const father = document.getElementById('father').value;

    // Split genotypes into individual alleles (e.g., "AS" -> ['A', 'S'])
    const motherAlleles = mother.split('');
    const fatherAlleles = father.split('');

    const outcomes = {};
    const totalCombinations = 4;

    // Cross-multiply alleles (Punnett Square logic)
    for (let m of motherAlleles) {
        for (let f of fatherAlleles) {
            // Sort to ensure "SA" becomes "AS" for consistency
            const combination = [m, f].sort().join('');

            if (outcomes[combination]) {
                outcomes[combination] += 1;
            } else {
                outcomes[combination] = 1;
            }
        }
    }

    // Grab elements from the DOM
    const resultsBox = document.getElementById('resultsBox');
    const resultsList = document.getElementById('resultsList');
    resultsList.innerHTML = ''; // Clear previous results

    // Sort results by highest percentage first
    const sortedOutcomes = Object.entries(outcomes).sort((a, b) => b[1] - a[1]);

    // Generate output markup dynamically
    for (const [genotype, count] of sortedOutcomes) {
        const percentage = (count / totalCombinations) * 100;

        const item = document.createElement('div');
        item.className = 'result-item';
        item.innerHTML = `
            <span class="result-genotype">${genotype}</span>
            <span class="result-percentage">${percentage}%</span>
        `;
        resultsList.appendChild(item);
    }

    // Unhide results block
    resultsBox.style.display = 'block';
}