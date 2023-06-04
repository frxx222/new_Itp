<?php
function handleFormSubmission()
{
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Load XML file
  $xml = new DOMDocument();
  $xml->load('contact.xml');

  // Create new entry
  $entry = $xml->createElement('entry');
  $entry->setAttribute('timestamp', date('Y-m-d H:i:s'));

  $nameNode = $xml->createElement('name', $name);
  $emailNode = $xml->createElement('email', $email);
  $msgNode = $xml->createElement('message', $message);

  $entry->appendChild($nameNode);
  $entry->appendChild($emailNode);
  $entry->appendChild($msgNode);

  // Append new entry to XML file
  $xml->documentElement->appendChild($entry);
  $xml->save('contact.xml');

  // Redirect back to the form
  header('Location: web.php');
  exit;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  handleFormSubmission();
}
