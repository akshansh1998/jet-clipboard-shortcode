'use strict';

document.addEventListener('DOMContentLoaded', function () {
  const onClick = (content, node) => {
    // Create a temporary element to parse HTML content
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = content;

    // Extract plain text (preserve line breaks and spacing)
    const plainText = tempDiv.innerText || tempDiv.textContent;

    // Write to clipboard
    navigator.clipboard.writeText(plainText).then(() => {
      let timerId;
      node.classList.add('copied');

      timerId = setTimeout(() => {
        node.classList.remove('copied');
        clearTimeout(timerId);
      }, 500);
    });
  };

  document.addEventListener('click', e => {
    let node = e.target.closest('[data-jet-clipboard]');

    if (!document.contains(node)) {
      return;
    }

    if (!node) {
      return;
    }

    let content = node.getAttribute('data-jet-clipboard');

    if (!content) {
      return;
    }

    onClick(content, node);
  });
});
