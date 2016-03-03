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
  author-link:
    label: Author link
    type: url
  type:
    label: Type
    type: select
    options:
      feature: Feature
      news: News
      review: Review
      video: Video
      podcast: Podcast
  source:
    label: Source
    type: text
  source-url:
    label: Source URL
    type: url
