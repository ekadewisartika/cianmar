<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Dashboard - Anmar Binawisata' ?></title>
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#099268',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            cursor: pointer;
        }
        
        .file-drop-area {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 100%;
            padding: 2rem;
            border: 2px dashed #cbd5e1;
            border-radius: 0.5rem;
            transition: 0.2s;
        }

        .file-drop-area.is-active {
            border-color: #099268;
        }

        .fake-btn {
            flex-shrink: 0;
            background-color: #099268;
            border: 1px solid #099268;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            color: #fff;
            transition: 0.2s;
        }

        .file-msg {
            color: #4b5563;
            font-size: 0.875rem;
            font-weight: 300;
            line-height: 1.4;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .file-input {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
            opacity: 0;
        }
    </style>
</head>
<body class="bg-gray-50">