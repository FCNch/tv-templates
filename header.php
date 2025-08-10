<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BK Player UI</title>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      display: flex;
      flex-direction: column;
    }
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-thumb {
      background: #4B5563;
      border-radius: 4px;
    }
  </style>
</head>
<body class="bg-gray-950 text-white font-sans h-screen overflow-hidden">
  <div class="flex flex-col md:flex-row h-full max-h-screen">