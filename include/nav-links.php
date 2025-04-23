<?php
include_once "include/lucide-icons.php";

$nav_items = [
  [
    "label" => "Dashboard",
    "link" => "#",
  ],
  [
    "label" => "Category",
    "link" => "#",
    "submenu" => [
      [
        "label" => "Animation",
        "link" => "/include/category/animation.php",
      ],
      [
        "label" => "Digital Arts",
        "link" => "#",
      ],
      [
        "label" => "Pencil and Paper",
        "link" => "#",
      ],
      [
        "label" => "UI Design",
        "link" => "#",
      ],
      [
        "label" => "Photography",
        "link" => "#",
      ],
      [
        "label" => "Certificate",
        "link" => "#",
      ],
    ],
  ],
  [
    "label" => "About Me",
    "link" => "#",
  ],
  [
    "label" => "Contact Us",
    "link" => "#",
  ],
];

// Optional: if you're echoing/using it later, you're good to go!
?>

<?php foreach ($nav_items as $item): ?>
<li>
  <span class="px-3 nav-link-custom">
    <?= $item["label"] ?>

    <?php if (isset($item["submenu"]) && !empty($item["submenu"])): ?>
    <div class="dropdown-icon ml-1">
      <?= IconChevronDown() ?>
    </div>
    <?php endif; ?>
  </span>

  <?php if (isset($item["submenu"]) && !empty($item["submenu"])): ?>
  <ul class="sub-menu">
    <?php foreach ($item["submenu"] as $sub_item): ?>
    <li>
      <span>
        <?= $sub_item["label"] ?>
      </span>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</li>
<?php endforeach; ?>

<style>
  /* Main nav item base style */
.nav-link-custom {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 18px;
  font-weight: 500;
  color: #333;
  transition: all 0.3s ease;
  padding: 10px 16px;
  cursor: pointer;
}

/* Smooth hover movement and color change */
.nav-link-custom:hover {
  color: #5693c9;
  transform: translateX(5px);
}

/* Submenu dropdown styled as a modern modal */
.sub-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 320px;
  background: #fff;
  padding: 2rem 1.5rem;
  border-radius: 12px;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
  z-index: 999;
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.3s ease;
}

/* Trigger visibility on hover */
li:hover > .sub-menu {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

/* Submenu items */
.sub-menu li {
  list-style: none;
  padding: 10px 14px;
  margin-bottom: 10px;
  border-radius: 8px;
  transition: background 0.2s ease, transform 0.2s ease;
}

/* Last item spacing fix */
.sub-menu li:last-child {
  margin-bottom: 0;
}

/* Item text style */
.sub-menu li span {
  display: block;
  font-size: 17px;
  font-weight: 500;
  color: #333;
  letter-spacing: 0.4px;
  transition: color 0.2s ease;
}

/* Hover effects */
.sub-menu li:hover {
  background: linear-gradient(135deg, #5693c9, #3b6ea5);
  transform: translateX(5px);
  cursor: pointer;
}

.sub-menu li:hover span {
  color: #fff;
}

/* Responsive tweaks */
@media (max-width: 768px) {
  .sub-menu {
    min-width: 220px;
    padding: 1.5rem 1rem;
  }

  .sub-menu li {
    padding: 8px 12px;
  }

  .sub-menu li span {
    font-size: 15px;
  }
}

@media (max-width: 480px) {
  .sub-menu {
    min-width: 100%;
    left: 0;
    border-radius: 0;
    box-shadow: none;
    padding: 1.5rem;
  }

  .sub-menu li {
    padding: 12px;
  }

  .sub-menu li span {
    font-size: 14px;
  }
}

</style>
