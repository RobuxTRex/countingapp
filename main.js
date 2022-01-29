// We must import a few things to make our application work.

const { app, BrowserWindow, ipcMain } = require("electron");

// Great, let's now make a window.

let win = null;

const createWindow = () => {
  win = new BrowserWindow({
    width: 800,
    height: 600,
    resizable: true,
    webPreferences: {
      nodeIntegration: true,
    },
  });

  win.loadFile("index.html");
};

app.whenReady().then(createWindow);
