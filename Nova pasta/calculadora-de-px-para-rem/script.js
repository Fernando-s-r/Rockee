function converter() {
  const base = parseFloat(document.getElementById('base').value);
  const pxInput = document.getElementById('px');
  const remInput = document.getElementById('rem');

  if (pxInput.value) {
    const px = parseFloat(pxInput.value);
    remInput.value = (px / base).toFixed(3);
  } else if (remInput.value) {
    const rem = parseFloat(remInput.value);
    pxInput.value = (rem * base).toFixed(1);
  }
}
