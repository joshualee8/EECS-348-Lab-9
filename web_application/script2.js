function changeStyles() {
    const colorInput = document.getElementById('colorInput').value;
    const borderWidthInput = document.getElementById('borderWidthInput').value;
    const outputText = document.getElementById('outputText');

    // Set the text and border color
    outputText.style.color = `rgb(${colorInput})`;
    outputText.style.borderColor = `rgb(${colorInput})`;

    // Set the border width
    outputText.style.borderWidth = `${borderWidthInput}px`;
}