const fmt = n => '₦' + Math.round(n).toLocaleString();
let termUnit = 'months';

function getMonths() {
  const t = parseFloat(document.getElementById('term').value) || 0;
  return termUnit === 'years' ? Math.round(t * 12) : Math.round(t);
}

function calculate() {
  const P = parseFloat(document.getElementById('principal').value) || 0;
  const annualRate = parseFloat(document.getElementById('rate').value) || 0;
  const n = getMonths();
  const r = annualRate / 100 / 12;

  let monthly, totalPayment, totalInterest;

  if (r === 0) {
    monthly = P / (n || 1);
    totalPayment = monthly * n;
    totalInterest = 0;
  } else {
    // Standard amortization formula: M = P * [r(1+r)^n] / [(1+r)^n - 1]
    monthly = P * r * Math.pow(1 + r, n) / (Math.pow(1 + r, n) - 1);
    totalPayment = monthly * n;
    totalInterest = totalPayment - P;
  }

  document.getElementById('monthly').textContent  = fmt(monthly);
  document.getElementById('total').textContent    = fmt(totalPayment);
  document.getElementById('interest').textContent = fmt(totalInterest);

  const pPct = P / (totalPayment || 1) * 100;
  document.getElementById('bar-p').style.width = pPct.toFixed(1) + '%';
  document.getElementById('bar-i').style.width = (100 - pPct).toFixed(1) + '%';

  buildSchedule(P, r, monthly, n);
}

function buildSchedule(P, r, monthly, n) {
  const body = document.getElementById('schedule-body');
  let balance = P;
  let html = '';

  for (let i = 1; i <= n; i++) {
    const intPart  = balance * r;
    const prinPart = monthly - intPart;
    balance = Math.max(0, balance - prinPart);

    html += `<div class="schedule-row">
      <span>${i}</span>
      <span>${fmt(monthly)}</span>
      <span>${fmt(prinPart)}</span>
      <span>${fmt(intPart)}</span>
      <span>${fmt(balance)}</span>
    </div>`;
  }

  body.innerHTML = html;
}

// Toggle between months and years
document.querySelectorAll('#term-toggle .toggle-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('#term-toggle .toggle-btn')
      .forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    termUnit = btn.dataset.unit;
    document.getElementById('term-suffix').textContent =
      termUnit === 'years' ? 'yr' : 'mo';
    const current = parseFloat(document.getElementById('term').value) || 0;
    document.getElementById('term').value =
      termUnit === 'years'
        ? (current / 12).toFixed(1)
        : Math.round(current * 12);
    calculate();
  });
});

// Recalculate on any input change
['principal', 'rate', 'term'].forEach(id =>
  document.getElementById(id).addEventListener('input', calculate)
);

// Run on page load
calculate();
