<?php
// Core Data Matrix
$user_name = "Shiva";
$current_date = date('F j, Y');
$app_status = "Stable";

$test_metrics = [
    ['label' => 'Total Executed tests', 'count' => '2,840', 'status' => '100% Sync', 'color' => 'text-indigo-600', 'bg' => 'bg-indigo-50'],
    ['label' => 'Passed Assertions', 'count' => '2,812', 'status' => '99.01% Rate', 'color' => 'text-emerald-600', 'bg' => 'bg-emerald-50'],
    ['label' => 'Detected Defect Logs', 'count' => '28', 'status' => '12 Critical', 'color' => 'text-rose-600', 'bg' => 'bg-rose-50'],
    ['label' => 'Automated Test Coverage', 'count' => '92.4%', 'status' => '+2.1% Target', 'color' => 'text-amber-600', 'bg' => 'bg-amber-50'],
];

$test_cases = [
    ['id' => 'TC-801', 'module' => 'Authentication Flow', 'type' => 'Integration', 'duration' => '1.2s', 'result' => 'Passed', 'badge' => 'bg-emerald-100 text-emerald-800'],
    ['id' => 'TC-802', 'module' => 'Payment Gateway Webhook', 'type' => 'Functional', 'duration' => '4.8s', 'result' => 'Passed', 'badge' => 'bg-emerald-100 text-emerald-800'],
    ['id' => 'TC-803', 'module' => 'User Profile Media Upload', 'type' => 'End-to-End', 'duration' => '12.4s', 'result' => 'Failed', 'badge' => 'bg-rose-100 text-rose-800'],
    ['id' => 'TC-804', 'module' => 'REST API Rate Limiting', 'type' => 'Security', 'duration' => '0.6s', 'result' => 'Skipped', 'badge' => 'bg-slate-100 text-slate-700'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Web Application Engine Version 2</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Transparent branding text layout */
        .watermark-bg {
            position: fixed;
            bottom: -8%;
            right: -2%;
            font-size: 16vw;
            font-weight: 900;
            color: rgba(99, 102, 241, 0.03);
            user-select: none;
            pointer-events: none;
            z-index: 0;
            letter-spacing: -0.05em;
            line-height: 1;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased relative min-h-screen">

    <!-- Subtle branding back-layer text background -->
    <div class="watermark-bg"><?php echo strtoupper($user_name); ?></div>

    <div class="flex h-screen overflow-hidden relative z-10">
        
        <!-- SIDEBAR -->
        <aside class="w-64 bg-white border-r border-slate-200 flex flex-col hidden md:flex">
            <!-- Header Logo -->
            <div class="h-16 flex items-center px-6 border-b border-slate-100 font-bold text-lg text-indigo-600 tracking-tight">
                ✨ AppTest Studio Version 2
            </div>
            <!-- Main Navigation Links -->
            <nav class="flex-1 p-4 space-y-1">
                <a href="#" class="flex items-center px-4 py-2.5 bg-indigo-50 text-indigo-600 rounded-xl font-medium transition-colors">
                    <span class="mr-3">🛡️</span> Test Suites
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-colors">
                    <span class="mr-3">📋</span> Execution Logs
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-colors">
                    <span class="mr-3">📊</span> Analytics Matrix
                </a>
                <a href="#" class="flex items-center px-4 py-2.5 text-slate-600 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-colors">
                    <span class="mr-3">⚙️</span> Configuration
                </a>
            </nav>
            <!-- Minimal Profile Box -->
            <div class="p-4 border-t border-slate-100 flex items-center gap-3 bg-slate-50/50">
                <div class="w-9 h-9 rounded-lg bg-indigo-600 text-white flex items-center justify-center font-bold text-sm">
                    S
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-900">Workspace Active</p>
                    <p class="text-xs text-slate-500">Node Cluster Local</p>
                </div>
            </div>
        </aside>

        <!-- CONTAINER SIDE WORKSPACE -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            
            <!-- HEADER TERMINAL PANEL -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 lg:px-8 shrink-0">
                <div class="flex items-center space-x-3">
                    <h1 class="text-md font-bold text-slate-900">Testing Web Application</h1>
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    <span class="text-xs font-medium text-slate-500 font-mono">Engine: <?php echo $app_status; ?></span>
                </div>
                <div class="text-sm text-slate-500 font-mono hidden sm:block">
                    <?php echo $current_date; ?>
                </div>
            </header>

            <!-- CONTEXT MAIN INTERFACE -->
            <main class="p-6 lg:p-8 max-w-7xl w-full mx-auto space-y-8">
                
                <!-- Main Header Card -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900">Test Execution Overview</h2>
                        <p class="text-sm text-slate-500 mt-0.5">Automated validation runs across web application endpoints and operational controllers.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="px-4 py-2 bg-white border border-slate-200 text-sm font-semibold rounded-xl text-slate-700 hover:bg-slate-50 transition-colors shadow-xs cursor-pointer">
                            Filter Matrix
                        </button>
                        <button class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl shadow-xs transition-colors cursor-pointer">
                            Run Full Suite
                        </button>
                    </div>
                </div>

                <!-- TEST APP METRICS ENGINE -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($test_metrics as $metric): ?>
                        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs flex flex-col justify-between space-y-3">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider"><?php echo $metric['label']; ?></span>
                            <div class="flex items-baseline justify-between">
                                <span class="text-3xl font-bold tracking-tight text-slate-900 font-mono"><?php echo $metric['count']; ?></span>
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-semibold <?php echo $metric['bg'] . ' ' . $metric['color']; ?>">
                                    <?php echo $metric['status']; ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- INTERACTIVE LOG RUN TABLE -->
                <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
                    <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/30">
                        <h3 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Recent Test Automation Run Log</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Live reporting data parsed directly from browser automation framework controllers.</p>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50/70 text-xs font-bold text-slate-400 border-b border-slate-200 uppercase tracking-wider">
                                    <th class="px-6 py-3.5">Target Test Case ID</th>
                                    <th class="px-6 py-3.5">Application Functional Module</th>
                                    <th class="px-6 py-3.5">Testing Framework Type</th>
                                    <th class="px-6 py-3.5">Runtime Speed</th>
                                    <th class="px-6 py-3.5">Result</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                <?php foreach ($test_cases as $case): ?>
                                    <tr class="hover:bg-indigo-50/10 transition-colors">
                                        <td class="px-6 py-4 font-mono text-xs font-bold text-indigo-600"><?php echo $case['id']; ?></td>
                                        <td class="px-6 py-4 font-medium text-slate-900"><?php echo htmlspecialchars($case['module']); ?></td>
                                        <td class="px-6 py-4 text-slate-500"><?php echo $case['type']; ?></td>
                                        <td class="px-6 py-4 font-mono text-xs text-slate-500"><?php echo $case['duration']; ?></td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-bold <?php echo $case['badge']; ?>">
                                                <?php echo $case['result']; ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>
