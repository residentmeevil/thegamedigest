<?php if(!defined('KIRBY')) exit ?>

title: Issue Link
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  textarea
  author:
    label: Author
    type: text
  type:
    label: Type
    type: select
    options:
      pencil : Written
      video-camera : Video
      microphone : Podcast
  source:
    label: Source
    type: text
  source_url:
    label: Source URL
    type: url
