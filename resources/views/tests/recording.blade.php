<!DOCTYPE html>
<html>
  <head>
    <title>Voice Recorder</title>
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        padding: 0;
      }

      button {
        font-size: 3em;
        padding: 20px;
        margin: 20px;
      }
    </style>
  </head>
  <body>
    <button id="record-button">Record</button>
    <button id="stop-button" disabled>Stop</button>
    <button id="play-button" disabled>Play</button>
    <button id="reset-button" disabled>Reset</button>
    <script>
      const recordButton = document.getElementById('record-button');
      const stopButton = document.getElementById('stop-button');
      const playButton = document.getElementById('play-button');
      const resetButton = document.getElementById('reset-button');
      let recorder;
      let audioBlob;
      let stream;
      
      recordButton.addEventListener('click', () => {
        navigator.mediaDevices.getUserMedia({ audio: true })
          .then(_stream => {
            stream = _stream;
            recorder = new MediaRecorder(stream);
            
            recorder.addEventListener('dataavailable', event => {
              audioBlob = event.data;
            });
            
            recorder.start();
            recordButton.disabled = true;
            stopButton.disabled = false;
            playButton.disabled = true;
            resetButton.disabled = true;
          })
          .catch(error => {
            console.error('Error accessing microphone', error);
          });
      });
      
      stopButton.addEventListener('click', () => {
        recorder.stop();
        stream.getTracks().forEach(track => track.stop());
        recordButton.disabled = false;
        stopButton.disabled = true;
        playButton.disabled = false;
        resetButton.disabled = false;
      });
      
      playButton.addEventListener('click', () => {
        const audio = new Audio(URL.createObjectURL(audioBlob));
        audio.play();
        playButton.disabled = true;
        audio.addEventListener('ended', () => {
          playButton.disabled = false;
        });
      });
      
      resetButton.addEventListener('click', () => {
        audioBlob = null;
        recordButton.disabled = false;
        stopButton.disabled = true;
        playButton.disabled = true;
        resetButton.disabled = true;
      });
    </script>
  </body>
</html>
