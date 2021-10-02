const openShareTab = (href) => {
  window.open(
    href,
    "",
    "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=800"
  );
  return false;
};
