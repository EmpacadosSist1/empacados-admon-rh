;(window.webpackJsonp = window.webpackJsonp || []).push([
  [0],
  {
    141: function (e, t, n) {
      'use strict'
      var o = n(1),
        r = n(202)
      n(195)
      o.a.use(r.a)
    },
    194: function (e, t, n) {
      var content = n(284)
      content.__esModule && (content = content.default),
        'string' == typeof content &&
          (content = [[e.i, content, '']]),
        content.locals && (e.exports = content.locals)
      ;(0, n(70).default)('2e2e3680', content, !0, { sourceMap: !1 })
    },
    204: function (e, t, n) {
      'use strict'
      n(283)
      var o = n(48),
        component = Object(o.a)(
          {},
          function () {
            var e = this._self._c
            return e('div', [e('nuxt')], 1)
          },
          [],
          !1,
          null,
          null,
          null,
        )
      t.a = component.exports
    },
    209: function (e, t, n) {
      e.exports = n(210)
    },
    271: function (e, t, n) {
      var content = n(272)
      content.__esModule && (content = content.default),
        'string' == typeof content &&
          (content = [[e.i, content, '']]),
        content.locals && (e.exports = content.locals)
      ;(0, n(70).default)('17bc9ac2', content, !0, { sourceMap: !1 })
    },
    272: function (e, t, n) {
      var o = n(69),
        r = n(193),
        c = n(273),
        l = n(274),
        d = n(275),
        m = n(276),
        f = o(function (i) {
          return i[1]
        }),
        h = r(c),
        w = r(l),
        v = r(d),
        y = r(m)
      f.push([
        e.i,
        '@font-face{font-family:"Roboto Condensed";font-style:normal;font-weight:400;src:local("Roboto Condensed"),local("RobotoCondensed-Regular"),url(' +
          h +
          ') format("woff2"),url(' +
          w +
          ') format("woff")}@font-face{font-family:"Roboto Condensed";font-style:normal;font-weight:700;src:local("Roboto Condensed Bold"),local("RobotoCondensed-Bold"),url(' +
          v +
          ') format("woff2"),url(' +
          y +
          ') format("woff")}*{box-sizing:border-box;font-family:"Roboto Condensed",sans-serif;padding:0}',
        '',
      ]),
        (f.locals = {}),
        (e.exports = f)
    },
    273: function (e, t, n) {
      e.exports =
        './fonts/roboto-condensed-v16-latin-regular.9c571b9.woff2'
    },
    274: function (e, t, n) {
      e.exports =
        './fonts/roboto-condensed-v16-latin-regular.af8dac2.woff'
    },
    275: function (e, t, n) {
      e.exports =
        './fonts/roboto-condensed-v16-latin-700.38d343e.woff2'
    },
    276: function (e, t, n) {
      e.exports =
        './fonts/roboto-condensed-v16-latin-700.3f5e8f8.woff'
    },
    283: function (e, t, n) {
      'use strict'
      n(194)
    },
    284: function (e, t, n) {
      var o = n(69)(function (i) {
        return i[1]
      })
      o.push([
        e.i,
        'html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;box-sizing:border-box;font-family:"Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;font-size:16px;word-spacing:1px}*,:after,:before{box-sizing:border-box;margin:0}.button--green{border:1px solid #3b8070;border-radius:4px;color:#3b8070;display:inline-block;padding:10px 30px;-webkit-text-decoration:none;text-decoration:none}.button--green:hover{background-color:#3b8070;color:#fff}.button--grey{border:1px solid #35495e;border-radius:4px;color:#35495e;display:inline-block;margin-left:15px;padding:10px 30px;-webkit-text-decoration:none;text-decoration:none}.button--grey:hover{background-color:#35495e;color:#fff}',
        '',
      ]),
        (o.locals = {}),
        (e.exports = o)
    },
    285: function (e, t, n) {
      'use strict'
      n.r(t),
        n.d(t, 'state', function () {
          return w
        }),
        n.d(t, 'actions', function () {
          return v
        }),
        n.d(t, 'mutations', function () {
          return y
        })
      n(47), n(67), n(68), n(49), n(51), n(28), n(26), n(64), n(46)
      var o = n(22),
        r =
          (n(72),
          n(205),
          n(16),
          n(36),
          n(42),
          n(207),
          n(41),
          n(37),
          n(50),
          n(289),
          n(189),
          n(88),
          n(195),
          n(300),
          n(306),
          n(1))
      function c(e, t) {
        var n =
          ('undefined' != typeof Symbol && e[Symbol.iterator]) ||
          e['@@iterator']
        if (!n) {
          if (
            Array.isArray(e) ||
            (n = (function (e, t) {
              if (!e) return
              if ('string' == typeof e) return l(e, t)
              var n = Object.prototype.toString.call(e).slice(8, -1)
              'Object' === n &&
                e.constructor &&
                (n = e.constructor.name)
              if ('Map' === n || 'Set' === n) return Array.from(e)
              if (
                'Arguments' === n ||
                /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
              )
                return l(e, t)
            })(e)) ||
            (t && e && 'number' == typeof e.length)
          ) {
            n && (e = n)
            var i = 0,
              o = function () {}
            return {
              s: o,
              n: function () {
                return i >= e.length
                  ? { done: !0 }
                  : { done: !1, value: e[i++] }
              },
              e: function (e) {
                throw e
              },
              f: o,
            }
          }
          throw new TypeError(
            'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.',
          )
        }
        var r,
          c = !0,
          d = !1
        return {
          s: function () {
            n = n.call(e)
          },
          n: function () {
            var e = n.next()
            return (c = e.done), e
          },
          e: function (e) {
            ;(d = !0), (r = e)
          },
          f: function () {
            try {
              c || null == n.return || n.return()
            } finally {
              if (d) throw r
            }
          },
        }
      }
      function l(e, t) {
        ;(null == t || t > e.length) && (t = e.length)
        for (var i = 0, n = new Array(t); i < t; i++) n[i] = e[i]
        return n
      }
      function d(object, e) {
        var t = Object.keys(object)
        if (Object.getOwnPropertySymbols) {
          var n = Object.getOwnPropertySymbols(object)
          e &&
            (n = n.filter(function (e) {
              return Object.getOwnPropertyDescriptor(object, e)
                .enumerable
            })),
            t.push.apply(t, n)
        }
        return t
      }
      function m(e) {
        for (var i = 1; i < arguments.length; i++) {
          var source = null != arguments[i] ? arguments[i] : {}
          i % 2
            ? d(Object(source), !0).forEach(function (t) {
                Object(o.a)(e, t, source[t])
              })
            : Object.getOwnPropertyDescriptors
              ? Object.defineProperties(
                  e,
                  Object.getOwnPropertyDescriptors(source),
                )
              : d(Object(source)).forEach(function (t) {
                  Object.defineProperty(
                    e,
                    t,
                    Object.getOwnPropertyDescriptor(source, t),
                  )
                })
        }
        return e
      }
      var f = n(208),
        h = n(309),
        w = function () {
          return {
            config: CONFIG,
            updatedOn: UPDATED_ON,
            uiNames: UINAMES,
            chart: null,
            people: [],
            assignments: [],
            orgArray: null,
            lines: [],
            showSideScreen: !0,
            columnView: !0,
            columnView_noStaff: !0,
            managerNameView: !0,
            managerPhotoView: !0,
            activeDepartment: null,
            moveDepartment: null,
            editMode: !1,
            showEditMenu: null,
            showViewMenu: null,
            selectedPerson: null,
            onlyShowParents: !1,
            zoomInstance: null,
            showNrDepartments: null,
            showNrPeople: null,
            showPerson: null,
            defaultPersonProperties: [
              { name: 'Email', type: 'email', order: 0 },
              { name: 'Phone', type: 'text', order: 1 },
              { name: 'Homepage', type: 'url', order: 2 },
              { name: 'Country', type: 'text', order: 3 },
              { name: 'City', type: 'text', order: 4 },
              { name: 'Street', type: 'text', order: 5 },
            ],
          }
        },
        v = {
          initStore: function (e, t) {
            var data,
              n,
              o = e.commit,
              r = e.state
            o('setConfig'),
              console.log(CONFIG, r.config),
              INPUT_DATA.api_version
                ? '1.0' === INPUT_DATA.api_version
                  ? ((data = E(INPUT_DATA.chart, [])),
                    (n = (function (e) {
                      return (
                        e.forEach(function (p) {
                          ;(p.fields = {
                            Email: p.email,
                            Phone: p.phone,
                            Homepage: p.homepage,
                            Country: p.country,
                            City: p.city,
                            Street: p.street,
                          }),
                            delete p.email,
                            delete p.phone,
                            delete p.homepage,
                            delete p.country,
                            delete p.city,
                            delete p.street,
                            delete p.function,
                            delete p.main_role
                        }),
                        e
                      )
                    })(INPUT_DATA.people)),
                    o('createTree1', data),
                    console.log('Loading 1.0 input data format'))
                  : '2.0' === INPUT_DATA.api_version
                    ? ((data = E(INPUT_DATA.chart, [])),
                      (n = INPUT_DATA.people),
                      o('createTree1', data),
                      console.log('Loading 2.0 input data format'))
                    : alert('wrong version input file')
                : ((data = (function () {
                    var data = []
                    return (
                      INPUT_DATA.chart.forEach(function (e) {
                        var t = INPUT_DATA.people.find(function (p) {
                            return p.id == e.manager_id
                          }),
                          n = []
                        e.dataFields &&
                          e.dataFields.length &&
                          (n = e.dataFields),
                          CONFIG.dataFields.forEach(function (e) {
                            var t = n.find(function (t) {
                              return t.name === e.name
                            })
                            t
                              ? (t.type = e.type)
                              : n.push(m(m({}, e), {}, { value: '' }))
                          }),
                          data.push({
                            id: e.id,
                            parent_id: e.parent_id,
                            isStaff: 'Y' == e.staff_department,
                            name: e.name,
                            description: e.description,
                            manager: t || { name: '' },
                            showChildren: !1,
                            showParents: !0,
                            onlyParents: !1,
                            parent: null,
                            children: null,
                            onlyShowThisChild: null,
                            dataFields: n,
                          })
                      }),
                      data
                    )
                  })()),
                  o('createTree', data),
                  console.log('Loading OLD input data format')),
              o('processAssignments', {
                departments: data.orgArray,
                people: n,
                assignments: INPUT_DATA.assignments,
              }),
              o('setPeople', n),
              o('setAssignments', INPUT_DATA.assignments)
            var c = this
            ;(window.onresize = function (e) {
              N(c)
            }),
              document.body.addEventListener('keyup', function (e) {
                27 === e.keyCode &&
                  (o('cancelAll'), o('setActiveDepartment', null))
              }),
              o('setEditMode', !1)
          },
          initZoom: function (e, t) {
            var n = e.commit,
              o = e.state,
              area = document.querySelector('#chart')
            o.zoomInstance && o.zoomInstance.dispose()
            var r = f(area, {
              smoothScroll: !1,
              maxZoom: 2,
              minZoom: 0.2,
            })
            setTimeout(function (e) {
              var n
              t
                ? ((n = (function (e) {
                    var t = document.getElementById('ID_' + e.id),
                      n = document.getElementById('chart'),
                      o = t.getBoundingClientRect(),
                      r = n.getBoundingClientRect(),
                      c = {
                        w: window.innerWidth,
                        h: window.innerHeight - 100,
                      },
                      l = {
                        y: r.top - o.top + 0.5 * c.h,
                        x: r.left - o.left + 0.5 * c.w - 300,
                      }
                    return (
                      (l.y = l.y > 0 ? 0 : l.y),
                      console.log(o, r, l, c),
                      {
                        isVissible: !(
                          o.bottom < 0 ||
                          o.right < 300 ||
                          o.left > window.innerWidth ||
                          o.top > window.innerHeight
                        ),
                        moveTo: l,
                      }
                    )
                  })(t).moveTo),
                  console.log(n))
                : (n = { x: 0, y: 0 }),
                r.moveTo(n.x, n.y)
            }, 500),
              r.on('panend', function (e) {
                console.log('Fired when pan ended', e)
                var t = document.getElementById('chart')
                console.log('transform', t.style.transform)
                var n =
                  t.getBoundingClientRect().width / t.offsetWidth
                console.log(n)
              }),
              n('setZoomInstance', r)
          },
          setShowNrDepartments: function (e, t) {
            var n = e.commit
            e.state, e.dispatch
            n('setShowNrDepartments', t)
          },
          setShowNrPeople: function (e, t) {
            var n = e.commit
            e.state, e.dispatch
            n('setShowNrPeople', t)
          },
          setShowDepartment: function (e, t) {
            var n = e.commit
            e.state, e.dispatch
            n('setActiveDepartment', null),
              n('setShowDepartment', t),
              N(this, t)
          },
          updateActiveDepartmentIsStaff: function (e, t) {
            var n = e.commit
            e.state
            n('updateActiveDepartmentIsStaff', t), N(this)
          },
          showChildren: function (e, t) {
            var n = e.commit
            e.state
            n('setActiveDepartment', null),
              n('showChildren', t),
              n('setActiveDepartment', t),
              N(this)
          },
          hideChildren: function (e, t) {
            var n = e.commit
            e.state
            n('hideChildren', t), N(this)
          },
          deleteDepartment: function (e, t) {
            var n = e.commit
            e.state
            n('deleteDepartment', t), N(this)
          },
          addDepartment: function (e, t) {
            var n = e.commit
            e.state
            n('addDepartment', t), N(this)
          },
          doMoveDepartment: function (e) {
            var t = e.commit
            e.state
            t('doMoveDepartment'), N(this)
          },
          setManagerPhotoView: function (e, t) {
            var n = e.commit
            e.state, e.dispatch
            n('setManagerPhotoView', t), N(this)
          },
          setColumnView_noStaff: function (e, t) {
            var n = e.commit,
              o = e.state
            e.dispatch
            n('setColumnView_noStaff', t), N(this, o.activeDepartment)
          },
          setColumnView: function (e, t) {
            var n = e.commit,
              o = e.state
            e.dispatch
            n('setColumnView', t), N(this, o.activeDepartment)
          },
          setHideSiblings: function (e, t) {
            var n = e.commit,
              o = e.state
            e.dispatch
            n('setHideSiblings', t), N(this, o.activeDepartment)
          },
          setOnlyShowParents: function (e, t) {
            var n = e.commit,
              o = e.state
            e.dispatch
            n('setOnlyShowParents', t), N(this, o.activeDepartment)
          },
          toggleHideParents: function (e) {
            var t = e.commit,
              n = e.state
            e.dispatch
            t('toggleHideParents'), N(this, n.activeDepartment)
          },
          setHideParents: function (e, t) {
            var n = e.commit,
              o = e.state
            e.dispatch
            n('setHideParents', t), N(this, o.activeDepartment)
          },
          refreshLines: function (e, t) {
            e.commit
            var n = e.state
            e.dispatch
            N(this, n.activeDepartment)
          },
          setActiveDepartmentById: function (e, t) {
            e.commit
            var n = e.state,
              o = e.dispatch,
              r = n.orgArray.find(function (e) {
                return e.id == t
              })
            r || (r = null), o('setShowDepartment', r)
          },
          setActiveEmployeeById: function (e, t) {
            var n = e.commit,
              o = e.state,
              r =
                (e.dispatch,
                o.people.find(function (e) {
                  return e.id == t
                }))
            r || (r = null),
              console.log(' founde', r),
              n('setShowPerson', r)
          },
        },
        y = {
          setConfig: function (e) {
            ;(e.config = m(
              {
                enableUserSettings: !0,
                showUserManual: !0,
                boxWidth: 120,
                boxHeight: 50,
              },
              CONFIG,
            )),
              e.config.editCommand ||
                (e.config.editCommand = '_edit'),
              e.config.personProperties ||
                (e.config.personProperties =
                  e.defaultPersonProperties),
              (e.columnView = e.config.startView.columnview),
              (e.columnView_noStaff =
                !e.config.startView.staffColumnview),
              (e.managerNameView = e.config.startView.names),
              (e.managerPhotoView = e.config.startView.photos),
              (e.showNrDepartments =
                e.config.startView.showNrDepartments),
              (e.showNrPeople = e.config.startView.showNrPeople)
          },
          setConfigUpdate: function (e) {
            var t =
                arguments.length > 1 && void 0 !== arguments[1]
                  ? arguments[1]
                  : {},
              n = t.prop,
              o = t.subProp,
              r = void 0 === o ? null : o,
              c = t.val
            console.log(n, r, c),
              r ? (e.config[n][r] = c) : (e.config[n] = c),
              console.log(e.config)
          },
          setPersonProperties: function (e, t) {
            ;(e.config.personProperties = []),
              t.forEach(function (t) {
                !t.deleted &&
                  t.name &&
                  e.config.personProperties.push({
                    name: t.name,
                    type: t.type,
                    order: t.order,
                  })
              }),
              e.config.personProperties.sort(function (a, b) {
                return a.order - b.order
              }),
              e.config.personProperties.forEach(function (a, i) {
                return (a.order = i)
              })
            var n = t.filter(function (p) {
                return p.deleted
              }),
              r = t.filter(function (p) {
                return p.oldName && p.name !== p.oldName
              }),
              c = t.filter(function (p) {
                return !p.oldName && p.name
              })
            console.log('del', n),
              console.log('cha', r),
              console.log('add', c),
              e.people.forEach(function (e) {
                r.forEach(function (t) {
                  delete Object.assign(
                    e.fields,
                    Object(o.a)({}, t.name, e.fields[t.oldName]),
                  )[t.oldName]
                }),
                  n.forEach(function (t) {
                    delete e.fields[t.oldName]
                  }),
                  c.forEach(function (t) {
                    e.fields[t.name] = ''
                  })
              }),
              console.log(e.people[0])
          },
          setShowPersonProperty: function (e, t) {
            e.showPerson.fields[t.prop.name] = t.value
          },
          setPropName: function (e, p) {
            p.prop.newName = p.value
          },
          setShowPersonID: function (e, t) {
            e.showPerson.id = t
          },
          setShowPersonPhoto: function (e, t) {
            e.showPerson.photo = t
          },
          setShowPersonName: function (e, t) {
            e.showPerson.name = t
          },
          setShowPersonFunctionName: function (e, t) {
            e.showPerson.functionName = t
          },
          setShowPerson: function (e, t) {
            console.log('setshowperson', t),
              t && t.new
                ? ((e.showPerson = {
                    name: '',
                    id: '',
                    new: !0,
                    manager: t.manager,
                    functionName: '',
                    departments: [],
                    fields: {},
                  }),
                  e.config.personProperties.forEach(function (p) {
                    e.showPerson.fields[p.name] = ''
                  }),
                  console.log('NNNNEEWW', e.showPerson))
                : (e.showPerson = t)
          },
          createTree: function (e, t) {
            ;(e.orgArray = t),
              (e.chart = A(h.clone(t))[0]),
              (e.chart.showChildren = !0)
          },
          createTree1: function (e, t) {
            ;(e.orgArray = []),
              t.orgArray.forEach(function (t) {
                return e.orgArray.push(t)
              }),
              (e.chart = t.dept),
              (e.chart.showChildren = !0)
          },
          setPeople: function (e, t) {
            ;(e.people = t), console.log('____people', e.people)
          },
          processAssignments: function (e, t) {
            var n = t.departments,
              o = t.people,
              r = t.assignments
            n.forEach(function (e) {
              e.manager.departments
                ? e.manager.departments.push({
                    role: 'Manager',
                    department: e,
                  })
                : (e.manager.departments = [
                    { role: 'Manager', department: e },
                  ])
              var t = r.filter(function (t) {
                  return e.id === t.department_id
                }),
                n = []
              t.forEach(function (t) {
                var p = o.find(function (p) {
                  return p.id === t.person_id
                })
                p.departments
                  ? p.departments.push({
                      role: t.role,
                      department: e,
                    })
                  : (p.departments = [
                      { role: t.role, department: e },
                    ]),
                  n.push({ person: p, role: t.role })
              }),
                (e.employees = n),
                e.employees.sort(function (a, b) {
                  return a.person.name > b.person.name
                    ? 1
                    : b.person.name > a.person.name
                      ? -1
                      : 0
                })
            })
          },
          setAssignments: function (e, t) {
            t.forEach(function (e, i) {
              e.id = x()
            }),
              (e.assignments = t)
          },
          setShowNrDepartments: function (e, t) {
            e.showNrDepartments = t
          },
          setShowNrPeople: function (e, t) {
            e.showNrPeople = t
          },
          setSelectedPerson: function (e, t) {
            e.selectedPerson = t
          },
          updateSelectedPerson: function (e, data) {
            e.selectedPerson[data.field] = data.value
          },
          setColumnView: function (e, t) {
            e.columnView = t
          },
          setColumnView_noStaff: function (e, t) {
            e.columnView_noStaff = t
          },
          setManagerNameView: function (e, t) {
            e.managerNameView = t
          },
          setManagerPhotoView: function (e, t) {
            e.managerPhotoView = t
          },
          setEditMode: function (e, t) {
            e.editMode = t
          },
          showEditMenu: function (e, t) {
            e.showEditMenu = t
          },
          showViewMenu: function (e, t) {
            console.log(t), (e.showViewMenu = t)
          },
          showChildren: function (e, t) {
            console.log('showchildren called', t),
              (t.showChildren = !0),
              t.parent &&
                e.onlyShowParents &&
                (t.parent.onlyShowThisChild = t)
          },
          setActiveDepartment: function (e, t) {
            e.chart.parent &&
              t &&
              !C(e.chart, t) &&
              (e.chart = e.orgArray.find(function (e) {
                return !e.parent
              })),
              (e.activeDepartment = t)
          },
          setShowDepartment: function (e, t) {
            e.chart = e.orgArray.find(function (e) {
              return !e.parent
            })
            var p = t.parent
            for (
              p && e.onlyShowParents
                ? (p.onlyShowThisChild = t)
                : p && (p.onlyShowThisChild = null),
                t.onlyShowThisChild = null;
              p;

            )
              (p.showChildren = !0),
                e.onlyShowParents && p.parent
                  ? (p.parent.onlyShowThisChild = p)
                  : p.parent && (p.parent.onlyShowThisChild = null),
                (p = p.parent)
            e.activeDepartment = t
          },
          deleteDepartment: function (e, t) {
            var n = []
            t.parent &&
              ((n = t.parent.children.filter(function (t) {
                return t !== e.activeDepartment
              })),
              (t.parent.children = n)),
              D(e, t),
              (e.activeDepartment = null),
              (e.showEditMenu = null)
          },
          addDepartment: function (e) {
            var t = {
              children: [],
              employees: [],
              description: '',
              id: x(),
              isStaff: !1,
              manager: { name: '', id: '', role: '' },
              name: '',
              parent: e.activeDepartment,
              parent_id: e.activeDepartment.id,
              showChildren: !1,
            }
            e.activeDepartment.children.push(t),
              (e.activeDepartment.parent.showChildren = !0),
              (e.activeDepartment.showChildren = !0),
              (e.activeDepartment = t),
              (e.showEditMenu = null)
          },
          addPerson: function (e, t) {
            ;(t.new = !1),
              delete t.new,
              delete t.manager,
              e.people.push(t)
          },
          updateActiveDepartmentName: function (e, t) {
            e.activeDepartment.name = t
          },
          updateActiveDepartmentManager: function (e, t) {
            e.activeDepartment.manager = t || {
              name: '',
              function: '',
              id: '',
              photo: '',
            }
          },
          updateActiveDepartmentDescription: function (e, t) {
            e.activeDepartment.description = t
          },
          updateActiveDepartmentIsStaff: function (e, t) {
            e.activeDepartment.isStaff = t
          },
          hideChildren: function (e, t) {
            var n = e.orgArray.findIndex(function (e) {
              return e.id === t.id
            })
            ;(t.showChildren = !1), e.orgArray.splice(n, 1, t)
          },
          setMoveDepartment: function (e) {
            e.moveDepartment = e.activeDepartment
          },
          cancelMoveDepartment: function (e) {
            e.moveDepartment = null
          },
          doMoveDepartment: function (e) {
            for (
              var t = e.activeDepartment, n = t !== e.moveDepartment;
              t.parent;

            )
              (t = t.parent),
                console.log(t),
                t === e.moveDepartment && (n = !1)
            n
              ? ((e.moveDepartment.parent.children =
                  e.moveDepartment.parent.children.filter(
                    function (t) {
                      return t !== e.moveDepartment
                    },
                  )),
                (e.moveDepartment.parent = e.activeDepartment),
                e.activeDepartment.children.push(e.moveDepartment),
                (e.activeDepartment = e.moveDepartment),
                (e.moveDepartment = null),
                (e.showEditMenu = null))
              : alert('cannot paste under itself (or children)')
          },
          addAssignment: function (e, t) {
            var n = t.department,
              o = t.role,
              r = t.person
            console.log('adding assignment', n, o, r),
              n.employees.push({ person: r, role: o }),
              n.employees.sort(function (a, b) {
                return a.person.name > b.person.name
                  ? 1
                  : b.person.name > a.person.name
                    ? -1
                    : 0
              }),
              r.departments.push({ role: o, department: n }),
              r.departments.sort(function (a, b) {
                return a.department.name > b.department.name
                  ? 1
                  : b.department.name > a.department.name
                    ? -1
                    : 0
              })
          },
          updateRole: function (e, t) {
            var n = t.assignment,
              o = t.department,
              r = t.role,
              c = n.role
            ;(n.role = r),
              (n.person.departments.find(function (a) {
                return a.department == o && a.role == c
              }).role = r)
          },
          removeAssignment: function (e, t) {
            var n = t.assignment,
              o = t.department,
              r = n.person,
              c = n.role
            console.log(r, c),
              (r.departments = r.departments.filter(function (a) {
                return !(a.department == o && a.role == c)
              })),
              (o.employees = o.employees.filter(function (a) {
                return a !== n
              })),
              console.log(o.employees)
          },
          addManager: function (e, t) {
            var n = t.department,
              o = t.person
            n.manager = o
          },
          addLine: function (e) {
            e.lines = P(e.chart, [])
          },
          removeLines: function (e) {
            e.lines = []
          },
          closeSideScreen: function (e) {
            ;(e.showSideScreen = !1),
              (document.getElementById('chart').style.marginLeft =
                '20px'),
              (e.lines = P(e.chart, []))
          },
          openSideScreen: function (e) {
            ;(e.showSideScreen = !0),
              (document.getElementById('chart').style.marginLeft =
                '300px'),
              (e.lines = P(e.chart, []))
          },
          cancelAll: function (e) {
            ;(e.showEditMenu = null),
              (e.moveDepartment = null),
              (e.showViewMenu = null),
              (e.editMenuOpen = !1)
          },
          setHideSiblings: function (e, t) {
            t.parent.onlyShowThisChild
              ? (t.parent.onlyShowThisChild = null)
              : (t.parent.onlyShowThisChild = t)
          },
          setOnlyShowParents: function (e, t) {
            ;(e.onlyShowParents = t),
              console.log('ccc', t, e.activeDepartment)
          },
          setHideParents: function (e, t) {
            ;(e.activeDepartment.showParents = !t),
              (e.chart = t
                ? e.activeDepartment
                : e.orgArray.find(function (e) {
                    return !e.parent
                  }))
          },
          toggleHideParents: function (e) {
            ;(e.activeDepartment.showParents =
              !e.activeDepartment.showParents),
              e.activeDepartment.showParents
                ? (e.chart = e.orgArray.find(function (e) {
                    return !e.parent
                  }))
                : (e.chart = e.activeDepartment)
          },
          deleteEmployee: function (e, t) {
            t.departments.forEach(function (e) {
              var n = e.department
              n.manager === t &&
                (n.manager = { name: '', id: '', role: '' }),
                (n.employees = n.employees.filter(function (e) {
                  return e.person !== t
                }))
            }),
              (e.people = e.people.filter(function (p) {
                return p.id !== t.id
              }))
          },
          setZoomInstance: function (e, t) {
            e.zoomInstance = t
          },
          resetZoom: function (e, t) {
            e.zoomInstance.zoomAbs(300, 10, 1)
          },
        }
      function D(e, t) {
        t.children.length &&
          t.children.forEach(function (t) {
            D(e, t)
          }),
          (t.manager.departments = t.manager.departments.filter(
            function (e) {
              return e.department !== t
            },
          )),
          t.employees.forEach(function (e) {
            e.person.departments = e.person.departments.filter(
              function (e) {
                return e.department !== t
              },
            )
          }),
          (e.orgArray = e.orgArray.filter(function (e) {
            return e !== t
          }))
      }
      function P(e, t) {
        var svg = document.getElementById('svg'),
          n = document.getElementById('chart')
        return (
          (svg.style.width = n.offsetWidth + 'px'),
          (svg.style.height = n.offsetHeight + 'px'),
          e.showChildren &&
            e.children.forEach(function (e) {
              S(e) && (t.push(S(e)), P(e, t))
            }),
          t
        )
      }
      function S(e) {
        var t = (function (e) {
          var t = document.getElementById('ID_' + e.parent.id),
            n = document.getElementById('ID_' + e.id)
          if (!t || !n) return { parent: null }
          var o = {
              parent: e.parent
                ? document
                    .getElementById('ID_' + e.parent.id)
                    .getBoundingClientRect()
                : null,
              element: document
                .getElementById('ID_' + e.id)
                .getBoundingClientRect(),
            },
            r = document
              .getElementById('chart')
              .getBoundingClientRect()
          o.parent &&
            ((o.parent.x = o.parent.left - r.left),
            (o.parent.y = o.parent.top - r.top))
          return (
            (o.element.x = o.element.left - r.left),
            (o.element.y = o.element.top - r.top),
            o
          )
        })(e)
        if (!t.parent) return null
        var n = document.getElementById('chart'),
          o = 1 / (n.getBoundingClientRect().width / n.offsetWidth)
        return {
          d: e.isStaff
            ? 'M' +
              Math.round(t.parent.x + t.parent.width / 2) * o +
              ' ' +
              Math.round(t.parent.y + t.parent.height) * o +
              ' v' +
              Math.round(
                t.element.bottom -
                  t.parent.bottom -
                  t.element.height / 2,
              ) *
                o +
              ' H' +
              Math.round(t.element.x + t.parent.width) * o
            : 'M' +
              Math.round(t.parent.x + t.parent.width / 2) * o +
              ' ' +
              Math.round(t.parent.y + t.parent.height) * o +
              ' V' +
              Math.round(t.element.y * o - 10) +
              ' H' +
              Math.round(t.element.x + t.parent.width / 2) * o +
              ' V' +
              Math.round(t.element.y) * o,
        }
      }
      function A(e, t, n, o) {
        ;(o = void 0 !== o ? o : []),
          (t = void 0 !== t ? t : { id: '' })
        var r = h.remove(e, function (e) {
          return e.parent_id === t.id
        })
        return (
          t.id
            ? ((t.children = r), (t.parent = n.id ? n : null))
            : (o = r),
          r.length &&
            r.forEach(function (n) {
              A(e, n, t)
            }),
          o
        )
      }
      function C(e, t) {
        if (e === t) return t
        var n,
          o = null,
          r = c(e.children)
        try {
          for (r.s(); !(n = r.n()).done; ) {
            if ((o = C(n.value, t))) break
          }
        } catch (e) {
          r.e(e)
        } finally {
          r.f()
        }
        return o
      }
      function x() {
        function e() {
          return Math.floor(65536 * (1 + Math.random()))
            .toString(16)
            .substring(1)
        }
        return (
          e() +
          e() +
          '-' +
          e() +
          '-' +
          e() +
          '-' +
          e() +
          '-' +
          e() +
          e() +
          e()
        )
      }
      function N(e, t) {
        e.commit('removeLines'),
          setTimeout(function (n) {
            e.commit('addLine'), t && e.dispatch('initZoom', t)
          }, 0)
      }
      function E(e, t) {
        e.employees || r.a.set(e, 'employees', []), t.push(e)
        var n = INPUT_DATA.people.find(function (p) {
            return p.id == e.manager_id
          }),
          o = []
        return (
          e.dataFields && e.dataFields.length && (o = e.dataFields),
          CONFIG.dataFields.forEach(function (e) {
            var t = o.find(function (t) {
              return t.name === e.name
            })
            t
              ? (t.type = e.type)
              : o.push(m(m({}, e), {}, { value: '' }))
          }),
          (e.manager = n || { name: '' }),
          (e.dataFields = e.dataFields),
          (e.showChildren = !1),
          (e.isStaff = 'Y' == e.staff_department),
          (e.showParents = !0),
          (e.onlyParents = !1),
          (e.onlyShowThisChild = null),
          e.children.forEach(function (n) {
            ;(n.parent = e), E(n, t)
          }),
          { dept: e, orgArray: t }
        )
      }
    },
  },
  [[209, 3, 1, 4]],
])
