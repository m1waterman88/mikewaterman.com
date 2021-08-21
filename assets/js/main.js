// Move to top of page on reload.
window.onload = () => {
  document.documentElement.scrollTop = 0;
};

const colorSwitcher = (colorVariable, element) => {
  const root = document.styleSheets[1].cssRules[1].style;
  root.setProperty(colorVariable, element.options[element.selectedIndex].value);
}

const priColor = document.getElementById('priColor');
priColor.onchange = () => {
  colorSwitcher('--pri-color', priColor);
}

const secColor = document.getElementById('secColor');
secColor.onchange = () => {
  colorSwitcher('--sec-color', secColor);
}
