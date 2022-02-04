# FreshRSS-GitHub

This [FreshRSS](https://freshrss.org/) extension allows you to add GitHub feeds.

GitHub has [Atom feeds](https://docs.github.com/en/rest/reference/activity#feeds) that require you to specify the `application/atom+xml` type in the `Accept` header. By default, when trying to add a feed to FreshRSS, it uses the following `Accept` header:

```
application/atom+xml, application/rss+xml, application/rdf+xml;q=0.9, application/xml;q=0.8, text/xml;q=0.8, text/html;q=0.7, unknown/unknown;q=0.1, application/unknown;q=0.1, */*;q=0.1
```

...and GitHub doesn't seem to like that, and won't send a valid Atom feed. This extension overrides that for feeds from `github.com`, allowing you to add those feeds to FreshRSS. That's all.
