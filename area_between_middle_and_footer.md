$wgHooks['SkinAfterContent'][] = function(&$data, Skin $skin) {
  $data = "<div>
    <span>איך | פירוש | מה זה | ויקי</span>
  </div>";
  return true;
};
