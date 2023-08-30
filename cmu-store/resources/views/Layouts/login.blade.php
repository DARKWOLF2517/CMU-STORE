<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="/custom_css/login.css" rel="stylesheet">

  {{-- icon for webpage tab --}}
  <link rel="icon" href="{{ url('https://i.pinimg.com/736x/00/eb/c7/00ebc7ed5034e9f18acae56a19966099--flat-illustration-stock-illustrations.jpg') }}">

  @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="logo">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxANDw8ODQ8PDg8QEBAVEA8PDw8PDw8VFRUWFhUVFRUYHSggGBolGxUVITEhJykrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0mICYtLS0tLS0tLS0tLi0tLS4tLSstLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIGBAUHAwj/xABFEAABAwICBQgHAwoGAwAAAAABAAIDBBEFEgYhMUFRBxMiYXGBkaEyQlJyscHRIzOyFCRDYnOCkqLC8BUlU7Ph8VST0v/EABsBAQACAwEBAAAAAAAAAAAAAAAEBQIDBgEH/8QANxEAAgECAgYJAgUFAQEAAAAAAAECAwQRIQUSMVFhcSIyQYGRobHB0QYTI0JS4fAUM0NicqI0/9oADAMBAAIRAxEAPwDriaaEAk00IBJ2TQgEiyaaASE0IBITTQEUKVkICKFJJAKyE0ICNkWUkkBFCkkgEkpJICKE0ICKE0kAkJoQHohNCAEJoQAhNCAEJoQCQsGqxRjNTOmfId61VRWSSek7VwGxVN5pm2tnq460t0fd7F5vgSaVpUqZ7Fx+NpvJq2Nm1wJ6tawpMZHqsv2ladNc/X+o7qf9tKPm/F5eRPho+mus2/L0+TYOxd52Bo7rry/xOX2h5LEQoEtLXsv8r7sF6JG5WtFflRmf4nL7Q8lNuLPG2x7gsBCR0ter/LLvz9T12tH9KNtHjPtMt2FZcFfE/wBax4HUq8kSptH6iuodfCXdg/FZeTNE7Gm9mKLWNaLLCwU3i7Hmyz12lGp9ynGeGGKT8ViVM46smtxFJSSWwxEkpJIBJKSSAikpJIBITQgPRCE0AITQgBSQsatq2wtudZOwbysZzjCLlJ4JbWepNvBbT0qKhsQzONuA3laKsr3S6vRb7I2FeFRO6R2Zxv8ALsXkuK0lpudxjTo5Q83z3Lh47i3t7NQ6Us35ISaScMbpDliaXneRqaO1ypqFvUrS1KUW3uX8wS4vBEuc4wWMngCg6Ro1EtvwJ1+C3FNgV9c7yf1GXa3x2lbOnoYotUcbW9gF10Nv9NzedeeHCOb8dngmuJAqaQX5F4/BV42Pd6EUzuyPL+Ky9hQznZC4dpYFarIVpD6fs4rNN82/bAju+qvd4fJVTQTj9Ce57CvKSGRvpQyt6y0O/CSrekvZfT9k1kmuUvnEK+q8PApnOt2XAPAkh3gdai5yuE9LHILPY1w6wCtXVaPMOuFxYfZPSZ4HZ3KuuPptrOjPHhL5XwjfDSH6l4fB7YB9z+85bJYmFUhhjyOIJuTq2a1lrpbaDhRhGW1RSfNIr6jTm2t5FCkorcYCSURUMLzGHtLwLllxmA42U0Akk0ICKSkkgEhNCAmmhNACEJnVrKA8qqcRNLndw4lVuondI4udtPgOpe2I1fOv1eiPRWIuI03pP+on9mm+gv8A09/JdnjuLizt9SOtLa/JAk421lBNtZWypqExx8/KOkBdjDsHWetQtHaOndzeGUVtfst79O03V66pLi9iI0GEuls6W7GbmbHu97gOpb6GFrAGsaGgbABYLBosWa+zZOg7yP0WyGtdto5Wqor+lw1fPH/btx592RT1/ua/4m3+bAQmhTjSJCaEAklJJAJCaEBFCa0mM6SRU12s+1l9kHot94/Ja6tWFKOtN4IJYm1qahkTS+RwY0bSTZU3G9LXPuymuxu+Q+mewbvj2LR4pistS7NK69tjRqDewLVvkVBd6VnU6NLJb+1/HqZ4JbTJirXxSCVjiHg3zXuTxvxXScAxdlbEHt1PGqRm9p+i5M+RZeB4y6inbKLlh1SN9pu/vG0LDR9y6EsH1Xt+fnga5TR19JKnnbKxsjCHNeAWkbCDsUl0x6JJNJAJCaEBNNCEA1rsaqcrebG123sWxJtrVYrJ+ce526+rs3Kp0zeO3tnq9aXRXu+5ebRJtKX3KmexZ/HmY6aFOmgMr2xj1tp4NG0/3xXC29CVepGlDa3gv5uSzfBF1OahFyfYZ2C0POHnXjoNPQHtH2vottin3MnYsiKMMAa0WAFgF4Yp9zJ7q+jULaFvQ+1T2JeL7W+L/bYUE6jqT1pFXWXR4g+LUDmb7P8AexYiS+cW1epQanSk0+Hv2Pk8i/qQjPKSxLTR17Jths72f72rLVKz21jV2LZ0OOOZZsvTb7W8fVdfY6fhU6NwtV711e/d6cirrWTjnDPh2/uWJC86eoZKM0bg4dW7tXquhTTWKIAklJQkeGgucQ0DaSbAL0DWJiGIxUzc0rw3g3a53YFocY0rDbspbOP+odg90b/72qnVdU6RxfI4vcdpJuVU3elqdPo0uk/JfPd4mxQ3m6xnSeWe7I7xR8Abud2nd2BVp70nvXiSXGwBJOwAXJVBUqVK89abxf8ANi+A5JbAe9OnpZZ7iJjn2FzYagrNgWhsk1pKq8bPYHpHt4K9UVBFTsDImBrRwG1W1roqUulVyW7t/Y1vFnD5Hrxe9WjlBwf8ln55gtFNfsad47/qqc96jVLd0puDIdSTTwZ0bkzxvMH0Uh1tu+G/D1m9x1954K+r5/w3EXUs8U7NsbwbcR6w7xcd677SztljZKw3a9oc08QRcK7sarlT1XtXp2G2hU1lhuJpJpKabxITQgJppJoDFxSbJE7i7V4qtLb4/LrazqJ+S1K4n6ir69yqf6V5yzflqlxYQwp629+gLd4BT2a6U7XGw7B/zdaS24bTs7SrbTRBjGsHqgBSPpu2xnOu+zorm9vlguTZr0hUyUFz+D1WLin3MnurKWNin3MnurrJdVlYtqKsSoOcoOcvNzl8tgskdFJjc9eTnrd4dgzKiDOOhIXO6Q2HtG9anEaCWnP2jejue3W0/RXNXQ9enTjVj0otJ5bVisc17ryIX9VGTcXkecNY+J2aNxaerf2jerDhmkrH2ZPaN3t7WH6KoPesd70sr6tbdR4rc9n7d3fiaq0Yz27ToWK4/DTC1+cfbUxpB8TuVIxbGpao/aOs3dGNTR9Sta968XyKZc6RrXPReUdy932+nAjKMYknyLGfIvSGJ8zgyJpe47gLq5YFoWBaSrOY7RGNg7eK8tLGpX6uzf2fuapTxKxhGBz1h+zblZvkd6P/ACr/AIJo3BRgEDPJve7We7gtzFE1gDWANA2Aagq1pLpnBRXjjtPOPUaeiw/ru3dm1dHRtqFrHWe3e9vd+xrbwzZZSQOAvsQuS4Hjc9bilK+eQu6cmVg1Rs6DvRb89q60t9Cuq0XJLtwPITUlijS6X4WKykljt0wMzDwcNYXCHutqOo8OC+kCLrgemtF+S19RGBZpdnb2P1/G6i31PFKfcRbtYJS7jTOcuw8lmJc/Q8043dTvLP3fSb5G3cuMOcr3yP1uSrmgJ1SxBw7WH6OPgtNm9WpzI1tUwqpb8jriSZSVsWoIQhATTSTQFfxh95XdQA+f9SwVk4ibzSe/8gsZfOtLS1r2q/8AbDwy9i/tlhSjyPfD2ZpYx+uPLX8lalXMFF5m9TXKxrqvp+CjZJ7237exWXzxq9yGsXFfuJfdKyliYt9xL7hV1LYyItpTXOXi96i968XvXzKnHJF1OZeNFz+bj3nfFbR7A4WcAQdoK0+iZ/NW+874rcr6Naf/AD0/+Y+hTT6z5laxfRZr7vpjkd7B9A9nBUyvp5IHFkrCw9e/sO9dYWPW0UdQ0slYHg8RsUa60ZRr9JZS3rt5r328T1VGsjkD3rdYJovNV2c+8UXEjW7sCt+H6KU0EhksZDfoh+sNW9AtqCj2uiIwzqvHgtnfv5eOJ45YmDhWEQ0jcsTADvcdbj2lZyElcpYLBGJz/lHx+eCRtLC/m2OjzPc3U91yRbNuGrcuaverlyrOtWR/sR+IqiveqK8xdZp9hBrT6TRYNCHf5lSe+/8AA5dwXCdBXf5pSe/J/tvXdlYWC/DfP4Ntq8Yvn8CXIuWOmyVUEoH3kTgT7hB/rXXVzTloj+zpXcHSDxbf5LdcrGkz26WNJnKiVY+T2o5vE6U7nOc097T87KtrbaKuy11IR/rM8yAq2n11zRU0n+JHmvU+h0k0lcl8CEIQE01FSQFZrx9rJ73yCxiVl4sLSu6yD5D6LAc5fOtKQ1b2qv8AbHxz9y9t5fgx5GywN324913yVjVTweW08Y438wrYus0DLGyS3OS88fRlZef3W+CGsTF/uJPcKyliYx9xL7jlcS2Mirac/c9eL3qD3rwe9fO6cMkWM5nQ9ED+aN95/wASt2tFoWb0bPef+IreLvrX+xD/AJj6FfLaNCElvPBoSQgBCEkByTlcNqyL9j/UVQnOV65YD+eQ/sP6iqA5yprlfjSKm5l+JIsOgR/zSj9+T/beu9LgPJ+f80o/fk/23rvynWf9t8yVZdR8/gFzblod9lSjfncfBv8AyukLk/LPUXmpYgfRZK4j3i0D4Fbbh4U2bbp4UpHOFs9GBeupP28f4gtYt9oNDzmJUjeEhJ/dYT8lWU85rmiopdePNep35JCFcl8CEkICSaSEBotImWe13FtvD/taVzlZdIIc0OYbWEHu2FVN71xenqGrda/6kn3rL0SLO1qfh4bj2hnyPa72XA+avbHXAI3i65u96uujtZz0DdfSb0T3bPJTvp6thr0n/wBL0fsaLtYtSNqsXFGZoJRxY74LJSeLgjiCumIZyR714PkXticZimkjPqucO6+ryWve9cN9lwbi+zLwNkqh0vQGcOpMu9kjwe83+asi5xye4oI53U7jYTC7febu7x8F0ZddYz16EeCw8MjUniNCSFLPRoSQgGkhedRO2JjpHkNaxpc5x1AAC5JQHHeV6oDq5jB+jhbftLnG3hbxVEJWx0gxI1tVPUm/2jyWg7mjU0eAC1yp6stabZRVp69RyLRyaw58Upz7HOOP8BH9S7uuR8jlDmqZ6gjVHGGA9bjc/hHiuuKwtVhTLOzjhS5sFwflIr/yjEp7a2xBsY/d1n+Zzl2jHMRbR001Q/ZGxxtxO4d5sF85Syukc57zdz3Oc48STcnxK13k8lE1X08IqO/MgrvyS0nOV7pN0UXm4gDyDlSV13kiw7m6WSoI1zPs33Wah55lHto41FwItpHWqrhmX5JCFaFyCEkICSaimgIyxh7XNOxwIKoNYwxPcx21pI+i6AqxphRWtO0dT/kVVaXtfvUNZbY593avfuN1GerLmVl71tNGMT5icMcbMls08AfVPy71onvXg+Rc1a1JUaiqR7P5h3mypJNYHYboVf0SxsVUXNvP20YAd+sNzvqrAu3p1I1IqcdjIpz7lCoDHK2oaOjILO6nDZ5fBUp712fG8ObVwPhdvHRPA7iuL4jTvp5HxSCzmGx6+BHUqXSNtq1PuLY/X9/XE01G1mRbUOY5r2Etc0gtI2gjWCuu6JaRsxCIXIbOwASx/wBQ/VK4q96dJXyU8jZYXujkbsc34HiOpYWlZ0ZcGaFW1WfQyFQNH+UqGQCOvHMP1DnWAvid1kDW3zHWrtR4hDUNzQTRytO9j2u+CvYVIzWMWSoVIz6rMlCRK1WK6S0dGCaipjaR6gdnkPYxtys28Npk2ksWbW65Zyo6XtkDsPpXXF/ziRp1av0YO/r8OKwdLOUiWqDoaEOp4jcOlJtM8dVvQHn2KgKDXuU1qw8SvubpNasPEaEK28nejZrqkSvb9hCQXE7Hu2hvzPcocIOb1UQacHOSijpXJ7g/5FQxhwtJL05OILtgPYLDuVmSaLAAbAtNpXj7MNpnTOsXnoxR31vedndvPUFcZQjwRe9GEeCKPyu49mcygjdqbZ89uPqMP4v4VzRetVUvmkfLK4ufI4uc47ydq8VU1Z68nIpK1R1JuR7UtO6aRkTBdz3Na0dZNl9E4LQtpaeGBuyNjR4Bcv5KcC56d1ZIOhDqjvvedp7h8V1tTrSGrHW3+hYWVPVjrPt9BpISUomghJCAkmopoBqFTC2VjmOF2uBBUk0By7GaN1LK6N2za0+0Ny1T3rp+kmDisiIGqRutjvl2LldUx0bnMeC1zTYgrmb2x+zPGPVezhw+OB5ObPajxB9PI2WI2e09xG8HiCuq6P43HXRB7DZ4sJIyekw/TgVxh716YfiktJKJoHZXjva4cHDeFssrl0Xg+q/5iaPu4M7sqxppowK5nORWbOwajueOBXroxpZBXgMuIqgDpROO3rYfWHmFYVfdCrDembujOPA+eKuN8T3RyNLHtNi06iFiueu46T6KQYg27hklA6MjdvfxC5Nj+itXQk54zJHukjBt3jaFV1LOUHlmivr0ZwzWaNG5y881jcajxGo+KiXKK0pEFvE931crhZ0khHAvcR8V4AJoWRiJCnExzyGsaXOOxrQST3BXfRnk7nqS2SrvBFty/pHfRbIU5TeEUbKdKdR4RRX9GNHZsSlDIwQwH7SS2po4DiV3XBcLiooWQQtytaO8neT1qWF4bFSRtigYGNA3DasLSTSWnw2PPO67yDkhbYySdg3DrOpWNOlGlHF+JbUaMaEcW+bMzGMVhooXT1Dg1jfFx3NaN5K4RpPpBLiVQZpOi0XEUd7iNv1O8/QI0l0jnxKXnJjlY2/NxNJyRj5nif8ApadQ69fXyWwgXNz9x4R2AsvCsPkq5o4Ihdzza9rho3uPUFjMYXENaCXEgADWSTsAXZ+T7RUUMXPTAGokAv8AqDc0LCjRdSXDtMLeg6suHaWLA8LZRU8cEYsGN1nid5Pes1CSti6WQ0kJIAQkhASTUUICSaihASVa0u0aFY0yRWbO0auDxwKsiLrGcIzi4yWR41isDg1Wx0TnMkaWuabFp2hYj3rsulGi8Ve2/oTAdGQDyPELkWN4TPRPLJ2Ea+i8eg7sPyVLWs5Unis0QK0JQz7DC50tIc0lrgbggkEHiCNiuuj3KRLBaOtaaiMaudbYTN7Rsf5HtVCc5Qc5KU5U3jFkZVpQeKZ9C4Pj9LXC9NMx53svlkb2sOsLYPYHCzgCOB1r5oa4tIc0lpGwgkEdhViwzTnEaawbUGVo9WcNk/mPS81PheL8y8CVC+X5l4HVcV0LoaokvhDXH1mdE+SrtTyVwk3jne3qNj8lrqXlXlFhNSRvO8xyuj8iHfFbJnKtT+tTTA/qvY74kLN1KEtuHgZurbTzeHejHHJUN9T/ACBZ9FyX0rLGWSWXqJLR5WXi7lVpt1NOe1zB81gVXKw7WIaNo4OknJ/lDfmvNa3W481rWO7wbL7hej9LSC0ELGnjYXPesjEsUp6RueomjibuzOAJ7BtJ7FxrEeUHEZ9QlbADugY1p/idcjuKrE8z5XF8j3SPO1z3F7j3nWvJXcVlFexjO+isoL2Ok6R8p9w6PDmEbvyiUebGfM+C5xV1Mk73SzPdJI43c95JcV4pqHUqyqdYg1a06j6TBSYwuIa0EkmwAFyTwAWRh2Hy1UgigYXvPDYOsncF1zQ3QiOhAmntLUHfbos6m/VZUaMqj4bzOjbyqvct5g6A6F/k9qqraDMR0IzrEY/+lf0IVpCCisEW8IRhHViCSElkZjSQkgGhJCAaFLKjKgEhSyoyoBIUsqMqASxsQw+KpYY5mNe07iLrKyoyoDlmkfJu9l5KF2du3mnnWOw/VUGso5YHZJo3Ru4OFvA719JZViV+Ew1LS2eJkgPtAFRalrB5xy9CHVs4Szjk/I+cELr2K8l9PJd1O98J4a3t8CqrXcmtdH92Y5h1XafBRZWtRdmJDnaVY9mPIpaFuajRWuj9Klk7W5XfArEODVI208v8DvotTpzXY/A0/amvyvwZgoWaMHqf/Hk/9b/osmDRmtk9Gll78rfiipyfYx9qf6X4M1KFb6Lk5rpbZmtiHFzgT4BWfC+S2JtjUyuk4tbeNv181tjbVH2YG2NpVl2YczlkELpHBkbXPcdjWguPkrro9ydTz2fVHmI/ZGuQ/ILqOGYBTUgtBCxnXYXPethlUqnaRWcs/QmUrKMc5Z+hrMGwSChYGQRhvE+seslbFSypZVKJpFJTypZUBFJTypZUBFCllSyoCKFLKhAZGVPKpoQEMqeVTQgIZU8qmhAQyoyqaaAhlRlU0ICGVGVeiEB5lijzLfZHgF7IQHjzLfZHgEwwcF6pICGVLKvRCA88qMqmhAeeVGVeiSA88qMq9EkB55Usq9UkB55Usq9bJWQHnlQp2QgJoQhANCEIBoQhACaEIAQhCAaEIQAhCEAkIQgBCEIASQhACSEIASQhACSEIASQhACEIQH/2Q==" alt="Logo">
              </div>
              <h5>CMU-STORE-AMS</h5>

              <form action="{{ route('authentication') }}" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control rounded-left" placeholder="Username" required name="email">
                  </div>
                </div>
                <div class="form-group d-flex">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
                  </div>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50">
                    <label>
                      <input type="checkbox" checked="">
                      Remember Me
                    </label>
                  </div>
                  {{-- <div class="w-50 text-md-right">
                    <a href="#">Forgot Password</a>
                  </div> --}}
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary rounded submit">Log In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
  {{-- <div id="app">
    <login-form> </login-form>
  </div> --}}

</html>
