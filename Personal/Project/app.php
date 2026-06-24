<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — StockWarden</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,300;0,400;0,600;0,700;1,300&family=IBM+Plex+Mono:wght@300;400;500&family=IBM+Plex+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="app.css">
</head>
<body>

  <!-- ═══════════════════════════════ SIDEBAR ═══════════════════════════════ -->
  <aside class="sidebar">
    <div class="sidebar-brand">
      <a href="index.html" style="text-decoration: none; color: inherit; display: block;">
        <span class="brand-name">StockWarden</span>
        <span class="brand-tag">Inventory System</span>
      </a>
    </div>

    <nav>
      <div class="sidebar-section-label">Overview</div>
      <ul class="sidebar-nav">
        <li class="nav-item active">
          <a href="dashboard.html">
            <span class="nav-icon">[#]</span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[~]</span>
            Activity Log
          </a>
        </li>
      </ul>

      <div class="sidebar-section-label">Inventory</div>
      <ul class="sidebar-nav">
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[=]</span>
            All Products
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[+]</span>
            Add Item
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[!]</span>
            Low Stock
            <span class="nav-badge nav-badge-warn">7</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[x]</span>
            Out of Stock
            <span class="nav-badge">2</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[@]</span>
            Categories
          </a>
        </li>
      </ul>

      <div class="sidebar-section-label">Operations</div>
      <ul class="sidebar-nav">
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[&gt;]</span>
            Stock In
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[&lt;]</span>
            Stock Out
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[&amp;]</span>
            Suppliers
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[^]</span>
            Locations
          </a>
        </li>
      </ul>

      <div class="sidebar-section-label">Reports</div>
      <ul class="sidebar-nav">
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[%]</span>
            Stock Report
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[$]</span>
            Valuation
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[*]</span>
            Export Data
          </a>
        </li>
      </ul>

      <div class="sidebar-section-label">System</div>
      <ul class="sidebar-nav">
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[,]</span>
            Settings
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <span class="nav-icon">[?]</span>
            System Help
          </a>
        </li>
      </ul>
    </nav>

    <div class="sidebar-footer">
      <div class="user-row">
        <div class="user-avatar">AO</div>
        <div class="user-info">
          <span class="user-name">Ade Okafor</span>
          <span class="user-role">Admin</span>
        </div>
        <a href="index.html" class="logout-btn" title="Log out">&#x2190; Exit</a>
      </div>
    </div>
  </aside>

  <!-- ═══════════════════════════════ MAIN ═══════════════════════════════ -->
  <div class="main">

    <!-- TOPBAR -->
    <header class="topbar">
      <div>
        <div class="topbar-title">Dashboard</div>
        <div class="topbar-sub">Saturday, 4 Apr 2026 &mdash; Week 17</div>
      </div>
      <div class="topbar-spacer"></div>
      <div class="search-bar">
        <span>[/]</span>
        <input type="text" placeholder="Search products" />
      </div>
      <a href="#" class="topbar-btn">
        <span class="notif-dot"></span>
        Alerts (9)
      </a>
      <a href="#" class="topbar-btn primary">+ Add Item</a>
    </header>

    <!-- SCROLLABLE CONTENT -->
    <div class="content">

      <!-- ALERT STRIP -->
      <div class="alert-strip">
        <span class="alert-icon">[!]</span>
        <span><strong>7 items</strong> are below their reorder threshold &mdash; <strong>2 items</strong> are completely out of stock.</span>
        <a href="#">View all alerts &rarr;</a>
      </div>

      <!-- STAT CARDS -->
      <div class="stats-row">
        <div class="stat-card good">
          <div class="stat-label">Total Products</div>
          <div class="stat-value">1,284</div>
          <div class="stat-delta delta-up">&#x25B2; +12 this week</div>
          <div class="accent-bar"></div>
        </div>
        <div class="stat-card warn">
          <div class="stat-label">Low Stock Items</div>
          <div class="stat-value">7</div>
          <div class="stat-delta delta-down">&#x25BC; was 4 last week</div>
          <div class="accent-bar"></div>
        </div>
        <div class="stat-card danger">
          <div class="stat-label">Out of Stock</div>
          <div class="stat-value">2</div>
          <div class="stat-delta delta-down">&#x25BC; needs attention</div>
          <div class="accent-bar"></div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Stock Value (&#x20A6;)</div>
          <div class="stat-value">4.7M</div>
          <div class="stat-delta delta-up">&#x25B2; +3.2% vs last month</div>
          <div class="accent-bar"></div>
        </div>
      </div>

      <!-- TWO-COL -->
      <div class="two-col">

        <!-- LEFT: INVENTORY TABLE -->
        <div>
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">Recent Inventory</span>
              <a href="#" class="panel-action">View all &rarr;</a>
            </div>
            <table class="inv-table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Stock Level</th>
                  <th>Status</th>
                  <th class="txt-right">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="item-name">Hydraulic Clamp 50mm</span>
                    <span class="item-sku">SKU-00482</span>
                  </td>
                  <td><span class="category-tag">Hardware</span></td>
                  <td class="txt-sm">Shelf A3</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill" style="width:82%"></div>
                      </div>
                      <span class="stock-bar-num stock-ok">82</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-ok">In Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">PVC Pipe 25mm &times; 3m</span>
                    <span class="item-sku">SKU-00193</span>
                  </td>
                  <td><span class="category-tag">Plumbing</span></td>
                  <td class="txt-sm">Bay 7</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill low" style="width:14%"></div>
                      </div>
                      <span class="stock-bar-num stock-low">14</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-low">Low Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">Safety Goggles EN166</span>
                    <span class="item-sku">SKU-00712</span>
                  </td>
                  <td><span class="category-tag">Safety</span></td>
                  <td class="txt-sm">Shelf C1</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill" style="width:65%"></div>
                      </div>
                      <span class="stock-bar-num stock-ok">65</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-ok">In Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">M10 Hex Bolt (Box/100)</span>
                    <span class="item-sku">SKU-00067</span>
                  </td>
                  <td><span class="category-tag">Fasteners</span></td>
                  <td class="txt-sm">Bin D12</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill out" style="width:0%"></div>
                      </div>
                      <span class="stock-bar-num stock-zero">0</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-out">Out of Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">3-Phase Contactor 25A</span>
                    <span class="item-sku">SKU-00541</span>
                  </td>
                  <td><span class="category-tag">Electrical</span></td>
                  <td class="txt-sm">Cabinet E</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill low" style="width:8%"></div>
                      </div>
                      <span class="stock-bar-num stock-low">8</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-low">Low Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">Anti-Seize Compound 500g</span>
                    <span class="item-sku">SKU-00388</span>
                  </td>
                  <td><span class="category-tag">Lubricants</span></td>
                  <td class="txt-sm">Shelf B2</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill" style="width:44%"></div>
                      </div>
                      <span class="stock-bar-num stock-ok">44</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-ok">In Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">Silicone Sealant 310ml</span>
                    <span class="item-sku">SKU-00229</span>
                  </td>
                  <td><span class="category-tag">Adhesives</span></td>
                  <td class="txt-sm">Shelf B4</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill out" style="width:0%"></div>
                      </div>
                      <span class="stock-bar-num stock-zero">0</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-out">Out of Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
                <tr>
                  <td>
                    <span class="item-name">Work Gloves L (Pair)</span>
                    <span class="item-sku">SKU-00804</span>
                  </td>
                  <td><span class="category-tag">Safety</span></td>
                  <td class="txt-sm">Shelf C1</td>
                  <td>
                    <div class="stock-bar-wrap">
                      <div class="stock-bar-track">
                        <div class="stock-bar-fill" style="width:91%"></div>
                      </div>
                      <span class="stock-bar-num stock-ok">91</span>
                    </div>
                  </td>
                  <td><span class="status-pill pill-ok">In Stock</span></td>
                  <td class="txt-right"><a href="#" class="row-action">Edit</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="flex-col-gap-lg">

          <!-- QUICK ACTIONS -->
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">Quick Actions</span>
            </div>
            <div class="quick-actions">
              <a href="#" class="quick-action">
                <span class="qa-icon">[+]</span>
                <div class="qa-label">
                  <strong>Stock In</strong>
                  Log new stock arrival
                </div>
              </a>
              <a href="#" class="quick-action">
                <span class="qa-icon">[-]</span>
                <div class="qa-label">
                  <strong>Stock Out</strong>
                  Record stock removal
                </div>
              </a>
              <a href="#" class="quick-action">
                <span class="qa-icon">[~]</span>
                <div class="qa-label">
                  <strong>Adjust Stock</strong>
                  Manual correction
                </div>
              </a>
              <a href="#" class="quick-action">
                <span class="qa-icon">[*]</span>
                <div class="qa-label">
                  <strong>Add Product</strong>
                  New SKU entry
                </div>
              </a>
            </div>
          </div>

          <!-- WEEKLY MOVEMENT (CSS chart) -->
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">Weekly Movements</span>
              <a href="#" class="panel-action">Report &rarr;</a>
            </div>
            <div class="movement-summary">
              <div class="movement-group">
                <div class="movement-label">Stock In</div>
                <div class="movement-val in">+248</div>
              </div>
              <div class="movement-group txt-right">
                <div class="movement-label">Stock Out</div>
                <div class="movement-val out">&minus;184</div>
              </div>
            </div>
            <!-- CSS bar chart -->
            <div class="movement-chart">
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:55%"></div>
                </div>
                <span class="chart-label-sm">M</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:78%"></div>
                </div>
                <span class="chart-label-sm">T</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:40%"></div>
                </div>
                <span class="chart-label-sm">W</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:90%"></div>
                </div>
                <span class="chart-label-sm">T</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:62%"></div>
                </div>
                <span class="chart-label-sm">F</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:22%"></div>
                </div>
                <span class="chart-label-sm">S</span>
              </div>
              <div class="chart-col-group">
                <div class="chart-bar-bg">
                  <div class="chart-bar-fill" style="height:10%;opacity:0.3;"></div>
                </div>
                <span class="chart-label-sm">S</span>
              </div>
            </div>
            <div class="chart-footer-text">Net: +64 units this week</div>
          </div>

          <!-- TOP MOVING ITEMS -->
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">Top Moving Items</span>
              <a href="#" class="panel-action">See all &rarr;</a>
            </div>
            <ul class="top-items">
              <li class="top-item">
                <span class="top-item-rank">01</span>
                <span class="top-item-name">Safety Goggles EN166</span>
                <div class="top-item-bar"><div class="top-item-bar-fill" style="width:100%"></div></div>
                <span class="top-item-count">48 out</span>
              </li>
              <li class="top-item">
                <span class="top-item-rank">02</span>
                <span class="top-item-name">Work Gloves L (Pair)</span>
                <div class="top-item-bar"><div class="top-item-bar-fill" style="width:80%"></div></div>
                <span class="top-item-count">39 out</span>
              </li>
              <li class="top-item">
                <span class="top-item-rank">03</span>
                <span class="top-item-name">M10 Hex Bolt (Box/100)</span>
                <div class="top-item-bar"><div class="top-item-bar-fill" style="width:60%"></div></div>
                <span class="top-item-count">29 out</span>
              </li>
              <li class="top-item">
                <span class="top-item-rank">04</span>
                <span class="top-item-name">PVC Pipe 25mm &times; 3m</span>
                <div class="top-item-bar"><div class="top-item-bar-fill" style="width:42%"></div></div>
                <span class="top-item-count">20 out</span>
              </li>
              <li class="top-item">
                <span class="top-item-rank">05</span>
                <span class="top-item-name">Silicone Sealant 310ml</span>
                <div class="top-item-bar"><div class="top-item-bar-fill" style="width:27%"></div></div>
                <span class="top-item-count">13 out</span>
              </li>
            </ul>
          </div>

          <!-- ACTIVITY FEED -->
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">Recent Activity</span>
              <a href="#" class="panel-action">Full log &rarr;</a>
            </div>
            <ul class="activity-list">
              <li class="activity-item">
                <div class="activity-dot dot-in"></div>
                <div>
                  <div class="activity-desc"><strong>+40 units</strong> received — Hydraulic Clamp 50mm</div>
                  <div class="activity-time">Today, 09:14 &mdash; Ade Okafor</div>
                </div>
              </li>
              <li class="activity-item">
                <div class="activity-dot dot-out"></div>
                <div>
                  <div class="activity-desc"><strong>-12 units</strong> dispatched — Safety Goggles EN166</div>
                  <div class="activity-time">Today, 08:51 &mdash; Emeka Dike</div>
                </div>
              </li>
              <li class="activity-item">
                <div class="activity-dot dot-low"></div>
                <div>
                  <div class="activity-desc">Alert triggered — <strong>PVC Pipe 25mm</strong> below threshold (min: 20)</div>
                  <div class="activity-time">Yesterday, 17:30 &mdash; System</div>
                </div>
              </li>
              <li class="activity-item">
                <div class="activity-dot dot-edit"></div>
                <div>
                  <div class="activity-desc">Product updated — <strong>3-Phase Contactor 25A</strong> — unit cost revised</div>
                  <div class="activity-time">Yesterday, 15:02 &mdash; Ade Okafor</div>
                </div>
              </li>
              <li class="activity-item">
                <div class="activity-dot dot-out"></div>
                <div>
                  <div class="activity-desc"><strong>-6 units</strong> dispatched — Anti-Seize Compound 500g</div>
                  <div class="activity-time">Yesterday, 11:44 &mdash; Emeka Dike</div>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div><!-- /content -->
  </div><!-- /main -->

</body>
</html>