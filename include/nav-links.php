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
        "label" => "Example Product",
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
  /* Parent <li> hover to show submenu */
li:hover > .sub-menu {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

/* Submenu dropdown like modal */
.sub-menu {
  display: none;
  position: absolute;
  background-color: white;
  padding: 1rem;
  border-radius: 15px; /* Rounded corners like a modal */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  top: 100%;
  left: 0;
  min-width: 200px;
  z-index: 1000;
  transition: all 0.3s ease;
  opacity: 0;
  transform: translateY(10px);
}

/* Submenu items */
.sub-menu li {
  list-style: none;
  padding: 8px 12px;
  transition: background-color 0.2s ease;
  border-radius: 10px;
}

.sub-menu li:hover {
  background-color: #f0f8ff; /* Light blue on hover */
  cursor: pointer;
}

/* Link or span in submenu */
.sub-menu li span {
  display: block;
  color: #333;
  text-decoration: none;
  font-weight: 500;
}

/* Responsive styles */
@media (max-width: 768px) {
  .nav-link-custom {
    font-size: 14px; /* Smaller font size for smaller screens */
    padding: 8px; /* Adjust padding */
  }

  .sub-menu {
    min-width: 150px; /* Adjust submenu width */
  }

  .sub-menu li {
    padding: 6px 10px; /* Adjust submenu item padding */
  }
}

@media (max-width: 480px) {
  .nav-link-custom {
    font-size: 12px; /* Even smaller font size for very small screens */
    padding: 6px; /* Further adjust padding */
  }

  .sub-menu {
    min-width: 120px; /* Further adjust submenu width */
  }

  .sub-menu li {
    padding: 4px 8px; /* Further adjust submenu item padding */
  }
}
</style>
