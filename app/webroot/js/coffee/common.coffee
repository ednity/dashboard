dispatcher = (path, func) ->
  dispatcher.path_func = dispatcher.path_func or []
  return dispatcher.path_func.push([path, func])  if func
  i = 0
  l = dispatcher.path_func.length
  while i < l
    func = dispatcher.path_func[i]
    match = path.match(func[0])
    match and func[1](match)
    ++i

dispatcher ".", ->
  $ ->
    console.log
    nav_list = $('ul.nav').find 'a'
    for a in nav_list
      if location.pathname is $(a).attr 'href'
        $(a).parent('li').addClass 'active'

dispatcher location.pathname
