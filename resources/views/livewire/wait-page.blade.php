<div class="approval-container">
    <style>
        .approval-container {
            text-align: center;
            background-color: #3498db;
            color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 1.5em;
            margin-bottom: 1em;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top: 4px solid #fff;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
            margin-top: 1em;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <div class="message">Please wait for Admin Approval or Please Contact with Office!</div>
    <div class="spinner"></div>
</div>